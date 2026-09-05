<?php

namespace App\Policies;

use App\Enums\UserRole;
use App\Models\Brand;
use App\Models\User;

class BrandPolicy
{
    public function before(User $user): ?bool
    {
        return $user->role === UserRole::Owner ? true : null;
    }

    public function viewAny(User $user): bool
    {
        return $user->role === UserRole::Admin;
    }

    public function create(User $user): bool
    {
        return $this->viewAny($user);
    }

    public function update(User $user, Brand $brand): bool
    {
        return $this->viewAny($user);
    }

    public function delete(User $user, Brand $brand): bool
    {
        return $this->viewAny($user);
    }
}
