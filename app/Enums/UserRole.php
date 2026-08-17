<?php

namespace App\Enums;

enum UserRole: string
{
    case Customer = 'customer';
    case Owner = 'owner';
    case Admin = 'admin';
    case Operator = 'operator';

    public function isStaff(): bool
    {
        return $this !== self::Customer;
    }
}
