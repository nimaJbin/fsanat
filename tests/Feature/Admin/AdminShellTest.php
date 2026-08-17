<?php

namespace Tests\Feature\Admin;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminShellTest extends TestCase
{
    use RefreshDatabase;

    public function test_owner_sees_the_operational_admin_shell(): void
    {
        $owner = User::factory()->create(['role' => UserRole::Owner]);

        $this->actingAs($owner)
            ->get('/admin/dashboard')
            ->assertOk()
            ->assertSee('پنل مدیریت')
            ->assertSee('فروش و عملیات')
            ->assertSee('مالی و سود')
            ->assertSee('به‌زودی')
            ->assertSee('داده نمایشی');
    }

    public function test_operator_does_not_receive_owner_only_navigation(): void
    {
        $operator = User::factory()->create(['role' => UserRole::Operator]);

        $this->actingAs($operator)
            ->get('/admin/dashboard')
            ->assertOk()
            ->assertDontSee('مالی و سود')
            ->assertDontSee('گزارش فعالیت');
    }

    public function test_customer_receives_the_persian_forbidden_page(): void
    {
        $customer = User::factory()->create(['role' => UserRole::Customer]);

        $this->actingAs($customer)
            ->get('/admin/dashboard')
            ->assertForbidden()
            ->assertSee('اجازه دسترسی ندارید');
    }

    public function test_unknown_page_uses_the_persian_not_found_page(): void
    {
        $this->get('/missing-page')
            ->assertNotFound()
            ->assertSee('این صفحه پیدا نشد');
    }

    public function test_login_and_password_pages_use_the_shared_form_contract(): void
    {
        $this->get('/admin/login')
            ->assertOk()
            ->assertSee('id="field-username"', false)
            ->assertSee('id="field-password"', false);

        $owner = User::factory()->create(['role' => UserRole::Owner]);

        $this->actingAs($owner)
            ->get('/admin/settings/password')
            ->assertOk()
            ->assertSee('id="field-current_password"', false)
            ->assertSee('id="field-password_confirmation"', false);
    }
}
