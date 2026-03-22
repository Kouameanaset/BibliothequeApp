@props([
    'name',
    'label' => '',
    'type' => 'text',
    'value' => '',
])

<div>
    @if($label)
        <label for="{{ $name }}">{{ $label }}</label><br>
    @endif

    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name, $value) }}"
    >
</div>
