<?php

namespace App\Actions\Catalog;

use App\Models\Category;

class SaveCategory
{
    public function __invoke(array $data, ?Category $category = null): Category
    {
        $category ??= new Category;
        $category->fill($data)->save();

        return $category;
    }
}
