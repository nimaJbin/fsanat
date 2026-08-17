<?php

namespace Tests\Feature\Admin;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_guest_is_redirected_from_admin_dashboard(): void
    {
        $this->get('/admin/dashboard')->assertRedirect('/admin/login');
    }

    public function test_customer_cannot_access_admin_dashboard(): void
    {
        $customer = User::factory()->create(['role' => UserRole::Customer]);

        $this->actingAs($customer)->get('/admin/dashboard')->assertForbidden();
    }

    public function test_inactive_staff_cannot_access_admin_dashboard(): void
    {
        $staff = User::factory()->create(['role' => UserRole::Admin, 'is_active' => false]);

        $this->actingAs($staff)->get('/admin/dashboard')->assertForbidden();
    }

    public function test_each_active_staff_role_can_access_admin_dashboard(): void
    {
        foreach ([UserRole::Owner, UserRole::Admin, UserRole::Operator] as $role) {
            $staff = User::factory()->create(['role' => $role]);
            $this->actingAs($staff)->get('/admin/dashboard')->assertOk();
            $this->post('/admin/logout');
        }
    }

    public function test_active_staff_can_login_with_username_and_password(): void
    {
        $staff = User::factory()->create([
            'username' => 'staff-user',
            'password' => 'secure-password',
            'role' => UserRole::Operator,
        ]);

        $this->post('/admin/login', [
            'username' => 'staff-user',
            'password' => 'secure-password',
        ])->assertRedirect('/admin/dashboard');

        $this->assertAuthenticatedAs($staff);
    }

    public function test_customer_credentials_are_rejected_by_admin_login(): void
    {
        User::factory()->create([
            'username' => 'customer-user',
            'password' => 'secure-password',
            'role' => UserRole::Customer,
        ]);

        $this->post('/admin/login', [
            'username' => 'customer-user',
            'password' => 'secure-password',
        ])->assertSessionHasErrors('username');

        $this->assertGuest();
    }

    public function test_inactive_staff_credentials_are_rejected_by_admin_login(): void
    {
        User::factory()->create([
            'username' => 'inactive-staff',
            'password' => 'secure-password',
            'role' => UserRole::Admin,
            'is_active' => false,
        ]);

        $this->post('/admin/login', ['username' => 'inactive-staff', 'password' => 'secure-password'])
            ->assertSessionHasErrors('username');

        $this->assertGuest();
    }

    public function test_repeated_failed_logins_are_throttled(): void
    {
        RateLimiter::clear('admin-login:unknown|127.0.0.1');

        foreach (range(1, 5) as $attempt) {
            $this->post('/admin/login', ['username' => 'unknown', 'password' => 'wrong-password']);
        }

        $response = $this->post('/admin/login', ['username' => 'unknown', 'password' => 'wrong-password'])
            ->assertSessionHasErrors('username');

        $message = $response->getSession()->get('errors')->first('username');

        $this->assertStringContainsString('تعداد تلاش‌ها بیش از حد مجاز است', $message);
    }

    public function test_authenticated_customer_is_redirected_away_from_admin_login(): void
    {
        $customer = User::factory()->create(['role' => UserRole::Customer]);

        $this->actingAs($customer)->get('/admin/login')->assertRedirect('/');
    }

    public function test_logout_invalidates_the_staff_session(): void
    {
        $staff = User::factory()->create(['role' => UserRole::Operator]);

        $this->actingAs($staff)->post('/admin/logout')->assertRedirect('/admin/login');

        $this->assertGuest();
    }

    public function test_staff_can_change_password_after_confirming_current_password(): void
    {
        $staff = User::factory()->create([
            'password' => 'old-secure-password',
            'role' => UserRole::Owner,
        ]);

        $this->actingAs($staff)->put('/admin/settings/password', [
            'current_password' => 'old-secure-password',
            'password' => 'new-secure-password',
            'password_confirmation' => 'new-secure-password',
        ])->assertSessionHasNoErrors()->assertSessionHas('success');

        $this->assertTrue(Hash::check('new-secure-password', $staff->fresh()->password));
    }
}
