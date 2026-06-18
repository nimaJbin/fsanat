@extends('layouts.admin', ['title' => 'Admin Dashboard'])

@section('body')
    <div class="admin-shell">
        <header class="admin-header">
            <div class="admin-brand">fsanat Admin</div>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button class="button secondary" type="submit">Logout</button>
            </form>
        </header>

        <main class="admin-main">
            <section class="content-panel" aria-labelledby="dashboard-title">
                <h1 id="dashboard-title">Admin Dashboard</h1>
                <p>Coming Soon</p>
            </section>
        </main>
    </div>
@endsection
