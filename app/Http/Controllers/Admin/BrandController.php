<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Catalog\SaveBrand;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BrandRequest;
use App\Models\Brand;
use App\Queries\Admin\GetBrands;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class BrandController extends Controller
{
    public function index(GetBrands $getBrands): View
    {
        $this->authorize('viewAny', Brand::class);

        return view('admin.brands.index', ['brands' => $getBrands()]);
    }

    public function create(): View
    {
        $this->authorize('create', Brand::class);

        return view('admin.brands.form', ['brand' => new Brand]);
    }

    public function store(BrandRequest $request, SaveBrand $saveBrand): RedirectResponse
    {
        $this->authorize('create', Brand::class);
        $saveBrand($request->validated());

        return to_route('admin.brands.index')->with('success', 'برند با موفقیت ایجاد شد.');
    }

    public function edit(Brand $brand): View
    {
        $this->authorize('update', $brand);

        return view('admin.brands.form', compact('brand'));
    }

    public function update(BrandRequest $request, Brand $brand, SaveBrand $saveBrand): RedirectResponse
    {
        $this->authorize('update', $brand);
        $saveBrand($request->validated(), $brand);

        return to_route('admin.brands.index')->with('success', 'برند با موفقیت ویرایش شد.');
    }

    public function destroy(Brand $brand): RedirectResponse
    {
        $this->authorize('delete', $brand);

        if ($brand->products()->exists()) {
            return back()->with('error', 'برند دارای محصول است و قابل حذف نیست؛ ابتدا آن را غیرفعال کنید.');
        }

        $brand->delete();

        return to_route('admin.brands.index')->with('success', 'برند حذف شد.');
    }
}
