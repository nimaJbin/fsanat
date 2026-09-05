@php
    $editing = $product->exists;
    $primaryCategory = $product->categories->firstWhere('pivot.is_primary', true)?->id;
    $selectedCategories = $product->categories->pluck('id')->all();
@endphp
@extends('layouts.admin.authenticated', [
    'title' => $editing ? 'ویرایش محصول' : 'محصول جدید', 'pageTitle' => $editing ? 'ویرایش محصول' : 'ثبت محصول',
    'pageDescription' => 'اطلاعات پایه، قیمت و موجودی محصول را یکجا ثبت کنید.',
    'breadcrumbs' => [['label' => 'داشبورد', 'url' => route('admin.dashboard')], ['label' => 'محصولات', 'url' => route('admin.products.index')], ['label' => $editing ? 'ویرایش' : 'جدید']],
])

@section('content')
    <form method="POST" action="{{ $editing ? route('admin.products.update', $product) : route('admin.products.store') }}">@csrf @if($editing) @method('PUT') @endif
        <div class="row row-cards">
            <div class="col-12 col-xl-8"><x-ui.card title="اطلاعات محصول">
                <x-ui.input name="name" label="نام محصول" :value="$product->name" required maxlength="255" />
                <div class="row"><div class="col-md-6"><x-ui.input name="sku" label="SKU" :value="$product->sku" required maxlength="100" dir="ltr" /></div><div class="col-md-6"><x-ui.input name="slug" label="شناسه URL" :value="$product->slug" required maxlength="255" dir="ltr" /></div></div>
                <div class="mb-3"><label class="form-label" for="field-description">توضیح کوتاه</label><textarea class="form-control @error('description') is-invalid @enderror" id="field-description" name="description" rows="5" maxlength="5000">{{ old('description', $product->description) }}</textarea>@error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror</div>
                <div class="row"><div class="col-md-6"><x-ui.select name="brand_id" label="برند" :selected="$product->brand_id" :options="$brands"><option value="">بدون برند</option></x-ui.select></div><div class="col-md-6"><x-ui.select name="primary_category_id" label="دسته‌بندی اصلی" :selected="$primaryCategory" :options="$categories" required /></div></div>
                <div class="mb-3"><label class="form-label" for="field-category-ids">دسته‌بندی‌های فرعی</label><select class="form-select @error('category_ids') is-invalid @enderror" id="field-category-ids" name="category_ids[]" multiple size="5">@foreach($categories as $id => $name)<option value="{{ $id }}" @selected(in_array((string) $id, array_map('strval', old('category_ids', $selectedCategories)), true))>{{ $name }}</option>@endforeach</select>@error('category_ids')<div class="invalid-feedback">{{ $message }}</div>@enderror<div class="form-hint">اختیاری؛ برای انتخاب چند مورد از Ctrl استفاده کنید.</div></div>
            </x-ui.card></div>
            <div class="col-12 col-xl-4"><x-ui.card title="فروش و موجودی">
                <x-ui.input name="price_rial" label="قیمت فروش (ریال)" type="number" :value="$product->price_rial" required min="0" />
                <x-ui.input name="base_cost_rial" label="هزینه پایه (ریال)" type="number" :value="$product->inventory?->base_cost_rial" min="0" />
                <x-ui.input name="quantity_on_hand" label="موجودی فعلی" type="number" :value="$product->inventory?->quantity_on_hand ?? 0" required min="0" />
                <x-ui.input name="reorder_point" label="حد هشدار موجودی" type="number" :value="$product->inventory?->reorder_point ?? 0" required min="0" />
                <x-ui.select name="status" label="وضعیت محصول" :selected="$product->status?->value ?? 'draft'" :options="$statuses" required />
                <x-ui.checkbox name="requires_approval" label="فروش نیازمند تأیید باشد" :checked="$product->requires_approval" />
            </x-ui.card></div>
        </div>
        <div class="d-flex flex-wrap gap-2 justify-content-end mt-4"><x-ui.button :href="route('admin.products.index')" variant="secondary">انصراف</x-ui.button><x-ui.button type="submit" variant="accent">ذخیره محصول</x-ui.button></div>
    </form>
@endsection
