@props([
    'name',
    'label' => '',
    'type' => 'text',
    'value' => '',
])

<div>
    @if($label)
        <label for="{{ $name }}" class="block text-teal-700 font-medium mb-2">{{ $label }} </label><br>
    @endif

    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name, $value) }}"
        class="w-full px-5 py-4 border border-slate-300 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 rounded-3xl outline-none transition"
    >
</div>
