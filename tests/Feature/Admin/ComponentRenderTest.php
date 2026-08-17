<?php

namespace Tests\Feature\Admin;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ViewErrorBag;
use Tests\TestCase;

class ComponentRenderTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        View::share('errors', new ViewErrorBag);
    }

    public function test_action_feedback_content_and_metric_components_render(): void
    {
        $html = Blade::render(<<<'BLADE'
            <x-ui.button variant="accent" icon="ti-check">ثبت</x-ui.button>
            <x-ui.alert variant="success" title="موفق">انجام شد</x-ui.alert>
            <x-ui.badge variant="warning">نیازمند بررسی</x-ui.badge>
            <x-ui.card title="کارت نمونه">محتوا<x-slot:footer>پاورقی</x-slot:footer></x-ui.card>
            <x-ui.metric label="فروش" value="۱۲" context="نمونه" variant="success" />
        BLADE);

        $this->assertStringContainsString('ثبت', $html);
        $this->assertStringContainsString('انجام شد', $html);
        $this->assertStringContainsString('کارت نمونه', $html);
        $this->assertStringContainsString('ui-metric--success', $html);
    }

    public function test_form_components_render_label_help_and_validation_contracts(): void
    {
        $html = Blade::render(<<<'BLADE'
            <x-ui.input name="sku" label="کد کالا" help="راهنما" required />
            <x-ui.select name="role" label="نقش" :options="['admin' => 'مدیر']" />
            <x-ui.checkbox name="active" label="فعال" />
        BLADE);

        $this->assertStringContainsString('for="field-sku"', $html);
        $this->assertStringContainsString('id="field-sku-help"', $html);
        $this->assertStringContainsString('value="admin"', $html);
        $this->assertStringContainsString('type="checkbox"', $html);
    }

    public function test_data_state_and_overlay_components_render(): void
    {
        $html = Blade::render(<<<'BLADE'
            <x-ui.filter-bar>فیلتر</x-ui.filter-bar>
            <x-ui.table label="جدول نمونه" empty empty-title="بدون داده" />
            <x-ui.state type="error" title="خطا" message="تلاش دوباره" />
            <x-ui.modal id="confirm-test" title="تأیید" confirm-label="حذف">متن تأیید</x-ui.modal>
            <x-ui.dropdown id="actions-test" label="عملیات"><button class="dropdown-item">ویرایش</button></x-ui.dropdown>
            <x-ui.drawer id="drawer-test" title="فیلترها">محتوا</x-ui.drawer>
        BLADE);

        $this->assertStringContainsString('بدون داده', $html);
        $this->assertStringContainsString('role="alert"', $html);
        $this->assertStringContainsString('id="confirm-test"', $html);
        $this->assertStringContainsString('id="actions-test"', $html);
        $this->assertStringContainsString('id="drawer-test"', $html);
    }
}
