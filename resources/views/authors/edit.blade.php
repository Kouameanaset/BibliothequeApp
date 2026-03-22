<x-layout>
    <h1>{{ __('messages.edit_author') }}</h1>

    <p>
        <a href="{{ route('authors.index') }}">{{ __('messages.back') }}</a>
    </p>

    <form action="{{ route('authors.update', $author) }}" method="POST">
        @csrf
        @method('PUT')

        <x-input
            name="last_name"
            :label="__('messages.last_name')"
            :value="$author->last_name"
        />
        <x-error field="last_name" />

        <br>

        <x-input
            name="first_name"
            :label="__('messages.first_name')"
            :value="$author->first_name"
        />
        <x-error field="first_name" />

        <br>

        <div>
            <label for="biography">{{ __('messages.biography') }}</label><br>
            <textarea name="biography" id="biography" rows="5" cols="40">{{ old('biography', $author->biography) }}</textarea>
            <x-error field="biography" />
        </div>

        <br>

        <x-input
            name="birth_date"
            :label="__('messages.birth_date')"
            type="date"
            :value="$author->birth_date"
        />
        <x-error field="birth_date" />

        <br>

        <x-button type="submit">{{ __('messages.update') }}</x-button>
    </form>
</x-layout>
