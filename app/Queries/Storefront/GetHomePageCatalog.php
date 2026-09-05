<?php

namespace App\Queries\Storefront;

use App\Enums\ProductStatus;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;

class GetHomePageCatalog
{
    /** @return array<string, mixed> */
    public function __invoke(): array
    {
        return [
            'is_preview' => false,
            'copyright_year' => now()->year,
            'categories' => Category::query()
                ->whereNull('parent_id')->where('is_active', true)
                ->withCount(['products' => fn ($query) => $query->where('status', ProductStatus::Active)])
                ->orderBy('sort_order')->limit(4)->get()
                ->map(fn (Category $category): array => [
                    'name' => $category->name,
                    'description' => number_format($category->products_count).' محصول فعال',
                    'icon' => 'ti-category-2',
                ])->all(),
            'featured_products' => $this->products(4),
            'new_products' => $this->products(3),
            'brands' => Brand::query()->where('is_active', true)
                ->whereHas('products', fn ($query) => $query->where('status', ProductStatus::Active))
                ->orderBy('name')->limit(5)->pluck('name')->all(),
        ];
    }

    /** @return array<int, array<string, mixed>> */
    private function products(int $limit): array
    {
        return Product::query()
            ->where('status', ProductStatus::Active)
            ->with(['brand:id,name', 'inventory:product_id,quantity_on_hand,quantity_reserved'])
            ->latest('published_at')->limit($limit)->get()
            ->map(function (Product $product): array {
                $available = max(0, ($product->inventory?->quantity_on_hand ?? 0) - ($product->inventory?->quantity_reserved ?? 0));

                return [
                    'name' => $product->name,
                    'eyebrow' => $product->brand?->name ?? 'محصول صنعتی',
                    'price' => number_format($product->price_rial).' ریال',
                    'stock' => $available > 0 ? 'موجود در انبار' : 'ناموجود',
                    'sku' => $product->sku,
                    'icon' => 'ti-package',
                ];
            })->all();
    }
}
