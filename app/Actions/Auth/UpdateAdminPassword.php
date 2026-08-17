<?php

namespace App\Actions\Auth;

use App\Models\User;

class UpdateAdminPassword
{
    public function __invoke(User $user, string $password): void
    {
        $user->forceFill(['password' => $password])->save();
    }
}
