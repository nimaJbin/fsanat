<header class="admin-topbar">
    <div class="d-flex align-items-center gap-2">
        <button class="btn btn-icon btn-ghost-secondary d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#admin-mobile-sidebar" aria-controls="admin-mobile-sidebar" aria-label="بازکردن منوی اصلی">
            <i class="ti ti-menu-2" aria-hidden="true"></i>
        </button>
        <button class="btn btn-icon btn-ghost-secondary d-none d-lg-inline-flex" id="admin-sidebar-toggle" type="button" aria-controls="admin-sidebar" aria-expanded="true" aria-label="جمع‌کردن منوی اصلی">
            <i class="ti ti-layout-sidebar-right-collapse" aria-hidden="true"></i>
        </button>
        <span class="admin-topbar__context d-none d-sm-inline">پنل مدیریت</span>
    </div>

    <div class="dropdown">
        <button class="btn admin-user-menu" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="avatar avatar-sm" aria-hidden="true">{{ mb_substr(auth()->user()->name, 0, 1) }}</span>
            <span class="admin-user-menu__meta d-none d-sm-flex">
                <strong>{{ auth()->user()->name }}</strong>
                <small>{{ auth()->user()->role->label() }}</small>
            </span>
            <i class="ti ti-chevron-down" aria-hidden="true"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            <a class="dropdown-item" href="{{ route('admin.password.edit') }}">
                <i class="ti ti-lock me-2" aria-hidden="true"></i>
                تغییر رمز عبور
            </a>
            <div class="dropdown-divider"></div>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button class="dropdown-item text-danger" type="submit">
                    <i class="ti ti-logout me-2" aria-hidden="true"></i>
                    خروج امن
                </button>
            </form>
        </div>
    </div>
</header>
