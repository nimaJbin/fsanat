<?php

namespace App\Actions\Catalog;

use App\Enums\ProductStatus;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class SaveProduct
{
    public function __invoke(array $data, User $actor, ?Product $product = null): Product
    {
        return DB::transaction(function () use ($data, $actor, $product): Product {
            $product ??= new Product;
            $productData = Arr::except($data, [
                'primary_category_id', 'category_ids', 'quantity_on_hand',
                'reorder_point', 'base_cost_rial',
            ]);
            $productData['published_at'] = $data['status'] === ProductStatus::Active->value
                ? ($product->published_at ?? now())
                : null;
            $product->fill($productData)->save();

            $categoryIds = collect([$data['primary_category_id'], ...($data['category_ids'] ?? [])])
                ->map(fn ($id): int => (int) $id)
                ->unique()
                ->values();
            $product->categories()->sync($categoryIds->mapWithKeys(fn (int $id): array => [
                $id => ['is_primary' => $id === (int) $data['primary_category_id']],
            ])->all());

            $inventory = $product->inventory()->firstOrNew();
            $previousQuantity = $inventory->exists ? $inventory->quantity_on_hand : 0;
            $inventory->fill([
                'quantity_on_hand' => $data['quantity_on_hand'],
                'reorder_point' => $data['reorder_point'],
                'base_cost_rial' => $data['base_cost_rial'] ?? null,
            ])->save();

            $quantityDelta = (int) $data['quantity_on_hand'] - $previousQuantity;
            if ($quantityDelta !== 0) {
                $inventory->movements()->create([
                    'actor_id' => $actor->id,
                    'type' => $inventory->wasRecentlyCreated ? 'receipt' : 'adjustment',
                    'quantity_delta' => $quantityDelta,
                    'quantity_after' => $data['quantity_on_hand'],
                    'reference_type' => Product::class,
                    'reference_id' => $product->id,
                    'reason' => $inventory->wasRecentlyCreated ? 'موجودی اولیه محصول' : 'ویرایش موجودی از فرم محصول',
                ]);
            }

            return $product->load(['brand', 'categories', 'inventory']);
        });
    }
}
