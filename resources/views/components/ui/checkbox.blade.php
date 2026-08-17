@props(['name', 'label', 'checked' => false, 'value' => '1', 'help' => null])

@php($fieldId = $attributes->get('id', 'field-'.$name))

<div class="mb-3">
    <label class="form-check">
        <input {{ $attributes->except('id')->class(['form-check-input', 'is-invalid' => $errors->has($name)]) }} id="{{ $fieldId }}" name="{{ $name }}" type="checkbox" value="{{ $value }}" @checked((bool) old($name, $checked))>
        <span class="form-check-label">{{ $label }}</span>
    </label>
    @error($name)<div class="text-danger small">{{ $message }}</div>@enderror
    @if($help)<div class="form-hint">{{ $help }}</div>@endif
</div>
