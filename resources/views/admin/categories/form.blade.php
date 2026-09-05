@php($editing = $category->exists)
@extends('layouts.admin.authenticated', [
    'title' => $editing ? 'ویرایش دسته‌بندی' : 'دسته‌بندی جدید', 'pageTitle' => $editing ? 'ویرایش دسته‌بندی' : 'ثبت دسته‌بندی',
    'pageDescription' => 'اطلاعات و جایگاه دسته‌بندی در کاتالوگ را تعیین کنید.',
    'breadcrumbs' => [['label' => 'داشبورد', 'url' => route('admin.dashboard')], ['label' => 'دسته‌بندی‌ها', 'url' => route('admin.categories.index')], ['label' => $editing ? 'ویرایش' : 'جدید']],
])

@section('content')
    <div class="row"><div class="col-12 col-xl-8"><x-ui.card title="اطلاعات دسته‌بندی"><form method="POST" action="{{ $editing ? route('admin.categories.update', $category) : route('admin.categories.store') }}">@csrf @if($editing) @method('PUT') @endif
        <x-ui.input name="name" label="نام دسته‌بندی" :value="$category->name" required maxlength="255" />
        <x-ui.input name="slug" label="شناسه URL" :value="$category->slug" required maxlength="255" dir="ltr" help="فقط حروف انگلیسی، عدد، خط تیره و زیرخط." />
        <x-ui.select name="parent_id" label="دسته والد" :selected="$category->parent_id" :options="$parents"><option value="">بدون والد</option></x-ui.select>
        <x-ui.input name="sort_order" label="ترتیب نمایش" type="number" :value="$category->sort_order ?? 0" required min="0" />
        <x-ui.checkbox name="is_active" label="دسته‌بندی فعال باشد" :checked="$category->exists ? $category->is_active : true" />
        <div class="d-flex flex-wrap gap-2 justify-content-end"><x-ui.button :href="route('admin.categories.index')" variant="secondary">انصراف</x-ui.button><x-ui.button type="submit" variant="accent">ذخیره دسته‌بندی</x-ui.button></div>
    </form></x-ui.card></div></div>
@endsection
