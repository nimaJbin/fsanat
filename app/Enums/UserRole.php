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

    public function label(): string
    {
        return match ($this) {
            self::Customer => 'مشتری',
            self::Owner => 'مالک',
            self::Admin => 'مدیر',
            self::Operator => 'اپراتور',
        };
    }
}
