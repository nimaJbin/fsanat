@extends('layouts.admin', ['title' => 'Admin Dashboard'])

@section('body')
    <div class="page" id="main-content">
        <header class="navbar navbar-expand-md bg-white border-bottom d-print-none">
            <div class="container-xl">
            <div class="navbar-brand fs-wordmark">فروشگاه صنعت جوان</div>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button class="btn btn-outline-secondary" type="submit">خروج</button>
            </form>
            </div>
        </header>

        <main class="page-wrapper">
            <div class="page-body">
            <div class="container-xl">
            <section class="card" aria-labelledby="dashboard-title">
                <div class="card-body">
                <h1 class="h2" id="dashboard-title">داشبورد مدیریت</h1>
                <p class="text-secondary mb-0">نسخه عملیاتی داشبورد در زیر‌فاز ۱.۵ تکمیل می‌شود.</p>
                </div>
            </section>
            </div>
            </div>
        </main>
    </div>
@endsection
