<?php

namespace App\Queries\Admin;

use App\Models\Product;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class GetProducts
{
    public function __invoke(): LengthAwarePaginator
    {
        return Product::query()
            ->with(['brand:id,name', 'inventory:product_id,quantity_on_hand,quantity_reserved'])
            ->latest()
            ->paginate(20);
    }
}
