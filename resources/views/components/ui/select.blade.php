@props(['name', 'label', 'options' => [], 'selected' => null, 'help' => null, 'required' => false])

@php($fieldId = $attributes->get('id', 'field-'.$name))

<div class="mb-3">
    <label class="form-label" for="{{ $fieldId }}">{{ $label }} @if($required)<span class="text-danger" aria-hidden="true">*</span>@endif</label>
    <select {{ $attributes->except('id')->class(['form-select', 'is-invalid' => $errors->has($name)]) }} id="{{ $fieldId }}" name="{{ $name }}" @required($required) @if($errors->has($name)) aria-invalid="true" @endif>
        {{ $slot }}
        @foreach($options as $optionValue => $optionLabel)
            <option value="{{ $optionValue }}" @selected((string) old($name, $selected) === (string) $optionValue)>{{ $optionLabel }}</option>
        @endforeach
    </select>
    @error($name)<div class="invalid-feedback">{{ $message }}</div>@enderror
    @if($help && ! $errors->has($name))<div class="form-hint">{{ $help }}</div>@endif
</div>
