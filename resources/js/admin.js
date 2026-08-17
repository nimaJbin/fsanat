import './bootstrap';
import '@tabler/core/dist/js/tabler.min.js';

const adminApp = document.querySelector('#admin-app');
const sidebarToggle = document.querySelector('#admin-sidebar-toggle');
const storageKey = 'fsanat.admin.sidebar-collapsed';

if (adminApp && sidebarToggle) {
    const setCollapsed = (collapsed) => {
        adminApp.classList.toggle('is-sidebar-collapsed', collapsed);
        sidebarToggle.setAttribute('aria-expanded', String(!collapsed));
        sidebarToggle.setAttribute('aria-label', collapsed ? 'بازکردن منوی اصلی' : 'جمع‌کردن منوی اصلی');

        const icon = sidebarToggle.querySelector('.ti');
        icon?.classList.toggle('ti-layout-sidebar-right-expand', collapsed);
        icon?.classList.toggle('ti-layout-sidebar-right-collapse', !collapsed);
    };

    setCollapsed(localStorage.getItem(storageKey) === 'true');

    sidebarToggle.addEventListener('click', () => {
        const collapsed = !adminApp.classList.contains('is-sidebar-collapsed');
        setCollapsed(collapsed);
        localStorage.setItem(storageKey, String(collapsed));
    });
}
