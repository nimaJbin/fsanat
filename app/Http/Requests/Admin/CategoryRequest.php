<?php

namespace App\Http\Requests\Admin;

use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;

class CategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        $category = $this->route('category');

        return $category
            ? $this->user()->can('update', $category)
            : $this->user()->can('create', Category::class);
    }

    public function rules(): array
    {
        $category = $this->route('category');

        return [
            'parent_id' => [
                'nullable',
                Rule::exists('categories', 'id')->whereNull('deleted_at'),
                Rule::notIn(array_filter([$category?->id])),
            ],
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'alpha_dash:ascii', 'max:255', Rule::unique('categories')->ignore($category)],
            'sort_order' => ['required', 'integer', 'min:0', 'max:4294967295'],
            'is_active' => ['nullable', 'boolean'],
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge(['is_active' => $this->boolean('is_active')]);
    }

    public function after(): array
    {
        return [function (Validator $validator): void {
            $category = $this->route('category');
            $parentId = $this->integer('parent_id');

            while ($category && $parentId > 0) {
                if ($parentId === $category->id) {
                    $validator->errors()->add('parent_id', 'دسته والد نمی‌تواند از زیرمجموعه‌های همین دسته باشد.');

                    return;
                }

                $parentId = (int) Category::query()->whereKey($parentId)->value('parent_id');
            }
        }];
    }

    public function messages(): array
    {
        return [
            'parent_id.exists' => 'دسته والد معتبر نیست.',
            'parent_id.not_in' => 'یک دسته نمی‌تواند والد خودش باشد.',
            'name.required' => 'نام دسته‌بندی الزامی است.',
            'slug.required' => 'شناسه URL الزامی است.',
            'slug.alpha_dash' => 'شناسه URL فقط می‌تواند شامل حروف انگلیسی، عدد، خط تیره و زیرخط باشد.',
            'slug.unique' => 'این شناسه URL قبلاً استفاده شده است.',
            'sort_order.required' => 'ترتیب نمایش الزامی است.',
            'sort_order.integer' => 'ترتیب نمایش باید عدد صحیح باشد.',
        ];
    }
}
