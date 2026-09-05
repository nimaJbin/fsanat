<?php

namespace App\Models;

use App\Enums\ApprovalStatus;
use App\Enums\OrderPaymentStatus;
use App\Enums\OrderStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    protected $fillable = [
        'number', 'user_id', 'status', 'approval_status', 'payment_status',
        'currency', 'items_total_rial', 'discount_total_rial',
        'shipping_total_rial', 'grand_total_rial', 'customer_name',
        'customer_phone', 'customer_email', 'shipping_province',
        'shipping_city', 'shipping_address', 'shipping_postal_code', 'note',
        'submitted_at', 'completed_at', 'cancelled_at',
    ];

    protected function casts(): array
    {
        return [
            'status' => OrderStatus::class,
            'approval_status' => ApprovalStatus::class,
            'payment_status' => OrderPaymentStatus::class,
            'items_total_rial' => 'integer',
            'discount_total_rial' => 'integer',
            'shipping_total_rial' => 'integer',
            'grand_total_rial' => 'integer',
            'submitted_at' => 'datetime',
            'completed_at' => 'datetime',
            'cancelled_at' => 'datetime',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }

    public function shipments(): HasMany
    {
        return $this->hasMany(Shipment::class);
    }
}
