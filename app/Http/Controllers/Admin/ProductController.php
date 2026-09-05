<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Catalog\SaveProduct;
use App\Enums\ProductStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Queries\Admin\GetProducts;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    public function index(GetProducts $getProducts): View
    {
        $this->authorize('viewAny', Product::class);

        return view('admin.products.index', ['products' => $getProducts()]);
    }

    public function create(): View
    {
        $this->authorize('create', Product::class);

        return view('admin.products.form', $this->formData(new Product));
    }

    public function store(ProductRequest $request, SaveProduct $saveProduct): RedirectResponse
    {
        $this->authorize('create', Product::class);
        $saveProduct($request->validated(), $request->user());

        return to_route('admin.products.index')->with('success', 'محصول با موفقیت ایجاد شد.');
    }

    public function edit(Product $product): View
    {
        $this->authorize('update', $product);

        return view('admin.products.form', $this->formData($product->load(['categories', 'inventory'])));
    }

    public function update(ProductRequest $request, Product $product, SaveProduct $saveProduct): RedirectResponse
    {
        $this->authorize('update', $product);
        $saveProduct($request->validated(), $request->user(), $product);

        return to_route('admin.products.index')->with('success', 'محصول با موفقیت ویرایش شد.');
    }

    public function destroy(Product $product): RedirectResponse
    {
        $this->authorize('delete', $product);

        if ($product->orderItems()->exists()) {
            return back()->with('error', 'محصول دارای سابقه سفارش است؛ آن را غیرفعال کنید.');
        }

        $product->delete();

        return to_route('admin.products.index')->with('success', 'محصول حذف شد.');
    }

    private function formData(Product $product): array
    {
        return [
            'product' => $product,
            'brands' => Brand::query()->where('is_active', true)->orderBy('name')->pluck('name', 'id'),
            'categories' => Category::query()->where('is_active', true)->orderBy('name')->pluck('name', 'id'),
            'statuses' => collect(ProductStatus::cases())
                ->mapWithKeys(fn (ProductStatus $status): array => [$status->value => $status->label()]),
        ];
    }
}
