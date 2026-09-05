<?php

namespace App\Actions\Catalog;

use App\Models\Brand;

class SaveBrand
{
    public function __invoke(array $data, ?Brand $brand = null): Brand
    {
        $brand ??= new Brand;
        $brand->fill($data)->save();

        return $brand;
    }
}
