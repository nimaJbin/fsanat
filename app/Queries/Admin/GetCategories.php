<?php

namespace App\Queries\Admin;

use App\Models\Category;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class GetCategories
{
    public function __invoke(): LengthAwarePaginator
    {
        return Category::query()
            ->with('parent:id,name')
            ->withCount('products')
            ->orderBy('sort_order')
            ->orderBy('name')
            ->paginate(20);
    }
}
