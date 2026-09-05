<?php

namespace App\Http\Requests\Admin;

use App\Enums\ProductStatus;
use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        $product = $this->route('product');

        return $product
            ? $this->user()->can('update', $product)
            : $this->user()->can('create', Product::class);
    }

    public function rules(): array
    {
        $product = $this->route('product');

        return [
            'brand_id' => ['nullable', Rule::exists('brands', 'id')->whereNull('deleted_at')],
            'primary_category_id' => ['required', Rule::exists('categories', 'id')->whereNull('deleted_at')],
            'category_ids' => ['nullable', 'array'],
            'category_ids.*' => ['integer', 'distinct', Rule::exists('categories', 'id')->whereNull('deleted_at')],
            'sku' => ['required', 'string', 'max:100', Rule::unique('products')->ignore($product)],
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'alpha_dash:ascii', 'max:255', Rule::unique('products')->ignore($product)],
            'description' => ['nullable', 'string', 'max:5000'],
            'price_rial' => ['required', 'integer', 'min:0'],
            'base_cost_rial' => ['nullable', 'integer', 'min:0'],
            'quantity_on_hand' => ['required', 'integer', 'min:0'],
            'reorder_point' => ['required', 'integer', 'min:0'],
            'status' => ['required', Rule::enum(ProductStatus::class)],
            'requires_approval' => ['nullable', 'boolean'],
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge(['requires_approval' => $this->boolean('requires_approval')]);
    }

    public function messages(): array
    {
        return [
            'primary_category_id.required' => 'دسته‌بندی اصلی الزامی است.',
            'primary_category_id.exists' => 'دسته‌بندی اصلی معتبر نیست.',
            'brand_id.exists' => 'برند انتخاب‌شده معتبر نیست.',
            'category_ids.*.exists' => 'یکی از دسته‌بندی‌های فرعی معتبر نیست.',
            'sku.required' => 'SKU محصول الزامی است.',
            'sku.unique' => 'این SKU قبلاً استفاده شده است.',
            'name.required' => 'نام محصول الزامی است.',
            'slug.required' => 'شناسه URL الزامی است.',
            'slug.alpha_dash' => 'شناسه URL فقط می‌تواند شامل حروف انگلیسی، عدد، خط تیره و زیرخط باشد.',
            'slug.unique' => 'این شناسه URL قبلاً استفاده شده است.',
            'price_rial.required' => 'قیمت فروش الزامی است.',
            'price_rial.integer' => 'قیمت فروش باید عدد صحیح ریالی باشد.',
            'price_rial.min' => 'قیمت فروش نمی‌تواند منفی باشد.',
            'quantity_on_hand.required' => 'موجودی فعلی الزامی است.',
            'quantity_on_hand.integer' => 'موجودی باید عدد صحیح باشد.',
            'quantity_on_hand.min' => 'موجودی نمی‌تواند منفی باشد.',
            'reorder_point.required' => 'حد هشدار موجودی الزامی است.',
            'status.required' => 'وضعیت محصول الزامی است.',
            'status.enum' => 'وضعیت محصول معتبر نیست.',
        ];
    }
}
