<x-layout>
    <h1>{{ __('messages.edit_category') }}</h1>

    <p>
        <a href="{{ route('categories.index') }}">{{ __('messages.back') }}</a>
    </p>

    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')

        <x-input
            name="name"
            :label="__('messages.name')"
            :value="$category->name"
        />
        <x-error field="name" />

        <br>

        <x-button type="submit">{{ __('messages.update') }}</x-button>
    </form>
</x-layout>
