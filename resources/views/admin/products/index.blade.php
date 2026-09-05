@extends('layouts.admin.authenticated', [
    'title' => 'محصولات', 'pageTitle' => 'محصولات',
    'pageDescription' => 'مدیریت اطلاعات فروش، وضعیت و موجودی محصولات.',
    'breadcrumbs' => [['label' => 'داشبورد', 'url' => route('admin.dashboard')], ['label' => 'محصولات']],
])

@section('page-actions')<x-ui.button :href="route('admin.products.create')" variant="accent" icon="ti-plus">محصول جدید</x-ui.button>@endsection

@section('content')
    <x-ui.card><x-ui.table label="فهرست محصولات" :empty="$products->isEmpty()" empty-title="محصولی ثبت نشده است" empty-message="اولین محصول کاتالوگ را ثبت کنید.">
        <x-slot:head><tr><th>محصول</th><th>SKU</th><th>برند</th><th>قیمت</th><th>موجودی قابل فروش</th><th>وضعیت</th><th class="text-end">عملیات</th></tr></x-slot:head>
        @foreach($products as $product)
            @php($available = max(0, ($product->inventory?->quantity_on_hand ?? 0) - ($product->inventory?->quantity_reserved ?? 0)))
            <tr><td class="fw-semibold">{{ $product->name }}</td><td dir="ltr">{{ $product->sku }}</td><td>{{ $product->brand?->name ?? '—' }}</td><td>{{ number_format($product->price_rial) }} ریال</td><td>{{ number_format($available) }}</td><td><x-ui.badge :variant="$product->status === \App\Enums\ProductStatus::Active ? 'success' : 'neutral'">{{ $product->status->label() }}</x-ui.badge></td><td class="text-end"><div class="d-inline-flex gap-2"><x-ui.button :href="route('admin.products.edit', $product)" variant="secondary">ویرایش</x-ui.button><form method="POST" action="{{ route('admin.products.destroy', $product) }}" onsubmit="return confirm('این محصول حذف شود؟')">@csrf @method('DELETE')<x-ui.button type="submit" variant="danger">حذف</x-ui.button></form></div></td></tr>
        @endforeach
        <x-slot:footer>{{ $products->links() }}</x-slot:footer>
    </x-ui.table></x-ui.card>
@endsection
