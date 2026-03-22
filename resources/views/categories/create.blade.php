<x-layout>
    <h1>{{ __('messages.add_category') }}</h1>

    <p>
        <a href="{{ route('categories.index') }}">{{ __('messages.back') }}</a>
    </p>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <x-input
            name="name"
            :label="__('messages.name')"
        />
        <x-error field="name" />

        <br>

        <x-button type="submit">{{ __('messages.save') }}</x-button>
    </form>
</x-layout>
