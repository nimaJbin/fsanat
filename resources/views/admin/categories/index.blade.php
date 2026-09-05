@extends('layouts.admin.authenticated', [
    'title' => 'دسته‌بندی‌ها', 'pageTitle' => 'دسته‌بندی‌ها',
    'pageDescription' => 'ساختار ساده و سلسله‌مراتبی کاتالوگ.',
    'breadcrumbs' => [['label' => 'داشبورد', 'url' => route('admin.dashboard')], ['label' => 'دسته‌بندی‌ها']],
])

@section('page-actions')<x-ui.button :href="route('admin.categories.create')" variant="accent" icon="ti-plus">دسته‌بندی جدید</x-ui.button>@endsection

@section('content')
    <x-ui.card><x-ui.table label="فهرست دسته‌بندی‌ها" :empty="$categories->isEmpty()" empty-title="دسته‌بندی ثبت نشده است" empty-message="اولین دسته‌بندی کاتالوگ را بسازید.">
        <x-slot:head><tr><th>نام</th><th>والد</th><th>محصولات</th><th>ترتیب</th><th>وضعیت</th><th class="text-end">عملیات</th></tr></x-slot:head>
        @foreach($categories as $category)<tr><td class="fw-semibold">{{ $category->name }}</td><td>{{ $category->parent?->name ?? '—' }}</td><td>{{ number_format($category->products_count) }}</td><td>{{ $category->sort_order }}</td><td><x-ui.badge :variant="$category->is_active ? 'success' : 'neutral'">{{ $category->is_active ? 'فعال' : 'غیرفعال' }}</x-ui.badge></td><td class="text-end"><div class="d-inline-flex gap-2"><x-ui.button :href="route('admin.categories.edit', $category)" variant="secondary">ویرایش</x-ui.button><form method="POST" action="{{ route('admin.categories.destroy', $category) }}" onsubmit="return confirm('این دسته‌بندی حذف شود؟')">@csrf @method('DELETE')<x-ui.button type="submit" variant="danger">حذف</x-ui.button></form></div></td></tr>@endforeach
        <x-slot:footer>{{ $categories->links() }}</x-slot:footer>
    </x-ui.table></x-ui.card>
@endsection
