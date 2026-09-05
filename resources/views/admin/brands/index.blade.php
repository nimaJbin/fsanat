@extends('layouts.admin.authenticated', [
    'title' => 'برندها',
    'pageTitle' => 'برندها',
    'pageDescription' => 'مدیریت برندهای قابل استفاده در کاتالوگ محصولات.',
    'breadcrumbs' => [['label' => 'داشبورد', 'url' => route('admin.dashboard')], ['label' => 'برندها']],
])

@section('page-actions')
    <x-ui.button :href="route('admin.brands.create')" variant="accent" icon="ti-plus">برند جدید</x-ui.button>
@endsection

@section('content')
    <x-ui.card>
        <x-ui.table label="فهرست برندها" :empty="$brands->isEmpty()" empty-title="برندی ثبت نشده است" empty-message="برای ثبت اولین برند از دکمه برند جدید استفاده کنید.">
            <x-slot:head><tr><th>نام</th><th>شناسه URL</th><th>محصولات</th><th>وضعیت</th><th class="text-end">عملیات</th></tr></x-slot:head>
            @foreach($brands as $brand)
                <tr>
                    <td class="fw-semibold">{{ $brand->name }}</td>
                    <td dir="ltr">{{ $brand->slug }}</td>
                    <td>{{ number_format($brand->products_count) }}</td>
                    <td><x-ui.badge :variant="$brand->is_active ? 'success' : 'neutral'">{{ $brand->is_active ? 'فعال' : 'غیرفعال' }}</x-ui.badge></td>
                    <td class="text-end"><div class="d-inline-flex gap-2"><x-ui.button :href="route('admin.brands.edit', $brand)" variant="secondary">ویرایش</x-ui.button><form method="POST" action="{{ route('admin.brands.destroy', $brand) }}" onsubmit="return confirm('این برند حذف شود؟')">@csrf @method('DELETE')<x-ui.button type="submit" variant="danger">حذف</x-ui.button></form></div></td>
                </tr>
            @endforeach
            <x-slot:footer>{{ $brands->links() }}</x-slot:footer>
        </x-ui.table>
    </x-ui.card>
@endsection
