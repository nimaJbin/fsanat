<?php

namespace App\Enums;

enum ProductStatus: string
{
    case Draft = 'draft';
    case Active = 'active';
    case Inactive = 'inactive';
    case Frozen = 'frozen';
    case Unavailable = 'unavailable';

    public function label(): string
    {
        return match ($this) {
            self::Draft => 'پیش‌نویس',
            self::Active => 'فعال',
            self::Inactive => 'غیرفعال',
            self::Frozen => 'متوقف',
            self::Unavailable => 'ناموجود',
        };
    }
}
