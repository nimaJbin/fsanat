<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = config('admin.owner.password');

        if (! $password && app()->isProduction()) {
            throw new \RuntimeException('ADMIN_OWNER_PASSWORD is required in production.');
        }

        User::updateOrCreate(
            ['username' => config('admin.owner.username')],
            [
                'name' => config('admin.owner.name'),
                'email' => config('admin.owner.email'),
                'password' => Hash::make($password ?: 'admin123456'),
                'role' => UserRole::Owner,
                'is_active' => true,
            ],
        );
    }
}
