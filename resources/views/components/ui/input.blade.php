@props([
    'name',
    'label',
    'type' => 'text',
    'value' => null,
    'help' => null,
    'required' => false,
])

@php($fieldId = $attributes->get('id', 'field-'.$name))
@php($errorId = $fieldId.'-error')
@php($helpId = $fieldId.'-help')

<div class="mb-3">
    <label class="form-label" for="{{ $fieldId }}">
        {{ $label }}
        @if($required)<span class="text-danger" aria-hidden="true">*</span>@endif
    </label>
    <input
        {{ $attributes->except('id')->class(['form-control', 'is-invalid' => $errors->has($name)]) }}
        id="{{ $fieldId }}"
        name="{{ $name }}"
        type="{{ $type }}"
        value="{{ $type === 'password' ? '' : old($name, $value) }}"
        @required($required)
        @if($errors->has($name)) aria-invalid="true" aria-describedby="{{ $errorId }}"
        @elseif($help) aria-describedby="{{ $helpId }}" @endif
    >
    @error($name)<div class="invalid-feedback" id="{{ $errorId }}">{{ $message }}</div>@enderror
    @if($help && ! $errors->has($name))<div class="form-hint" id="{{ $helpId }}">{{ $help }}</div>@endif
</div>
