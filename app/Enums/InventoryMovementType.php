<?php

namespace App\Enums;

enum InventoryMovementType: string
{
    case Receipt = 'receipt';
    case Adjustment = 'adjustment';
    case Reservation = 'reservation';
    case Release = 'release';
    case Sale = 'sale';
    case Return = 'return';
}
