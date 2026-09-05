@php($editing = $brand->exists)
@extends('layouts.admin.authenticated', [
    'title' => $editing ? 'ویرایش برند' : 'برند جدید',
    'pageTitle' => $editing ? 'ویرایش برند' : 'ثبت برند',
    'pageDescription' => 'نام نمایشی و شناسه URL برند را ثبت کنید.',
    'breadcrumbs' => [['label' => 'داشبورد', 'url' => route('admin.dashboard')], ['label' => 'برندها', 'url' => route('admin.brands.index')], ['label' => $editing ? 'ویرایش' : 'جدید']],
])

@section('content')
    <div class="row"><div class="col-12 col-xl-8"><x-ui.card title="اطلاعات برند">
        <form method="POST" action="{{ $editing ? route('admin.brands.update', $brand) : route('admin.brands.store') }}">
            @csrf @if($editing) @method('PUT') @endif
            <x-ui.input name="name" label="نام برند" :value="$brand->name" required maxlength="255" />
            <x-ui.input name="slug" label="شناسه URL" :value="$brand->slug" required maxlength="255" dir="ltr" help="فقط حروف انگلیسی، عدد، خط تیره و زیرخط." />
            <x-ui.checkbox name="is_active" label="برند فعال باشد" :checked="$brand->exists ? $brand->is_active : true" />
            <div class="d-flex flex-wrap gap-2 justify-content-end"><x-ui.button :href="route('admin.brands.index')" variant="secondary">انصراف</x-ui.button><x-ui.button type="submit" variant="accent">ذخیره برند</x-ui.button></div>
        </form>
    </x-ui.card></div></div>
@endsection
