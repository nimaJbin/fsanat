<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Catalog\SaveCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Models\Category;
use App\Queries\Admin\GetCategories;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class CategoryController extends Controller
{
    public function index(GetCategories $getCategories): View
    {
        $this->authorize('viewAny', Category::class);

        return view('admin.categories.index', ['categories' => $getCategories()]);
    }

    public function create(): View
    {
        $this->authorize('create', Category::class);

        return view('admin.categories.form', [
            'category' => new Category,
            'parents' => Category::query()->orderBy('name')->pluck('name', 'id'),
        ]);
    }

    public function store(CategoryRequest $request, SaveCategory $saveCategory): RedirectResponse
    {
        $this->authorize('create', Category::class);
        $saveCategory($request->validated());

        return to_route('admin.categories.index')->with('success', 'دسته‌بندی با موفقیت ایجاد شد.');
    }

    public function edit(Category $category): View
    {
        $this->authorize('update', $category);

        return view('admin.categories.form', [
            'category' => $category,
            'parents' => Category::query()->whereKeyNot($category->id)->orderBy('name')->pluck('name', 'id'),
        ]);
    }

    public function update(CategoryRequest $request, Category $category, SaveCategory $saveCategory): RedirectResponse
    {
        $this->authorize('update', $category);
        $saveCategory($request->validated(), $category);

        return to_route('admin.categories.index')->with('success', 'دسته‌بندی با موفقیت ویرایش شد.');
    }

    public function destroy(Category $category): RedirectResponse
    {
        $this->authorize('delete', $category);

        if ($category->children()->exists() || $category->products()->exists()) {
            return back()->with('error', 'دسته‌بندی دارای زیرمجموعه یا محصول است و قابل حذف نیست.');
        }

        $category->delete();

        return to_route('admin.categories.index')->with('success', 'دسته‌بندی حذف شد.');
    }
}
