<?php

namespace App\Queries\Admin;

use App\Models\Brand;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class GetBrands
{
    public function __invoke(): LengthAwarePaginator
    {
        return Brand::query()->withCount('products')->latest()->paginate(20);
    }
}
