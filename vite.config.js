import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/admin.css',
                'resources/css/storefront.css',
                'resources/js/admin.js',
                'resources/js/storefront.js',
            ],
            refresh: true,
        }),
    ],
});
