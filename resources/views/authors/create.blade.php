<x-layout>
    <div class="max-w-xl mx-auto">
    <h1 class="text-4xl font-bold mb-8">{{ __('messages.add_author') }}</h1>

    <p>
        <a href="{{ route('authors.index') }}" class="inline-flex items-center gap-2 text-teal-600 hover:text-teal-700 mb-6">← {{ __('messages.back') }}</a>
    </p>

    <form action="{{ route('authors.store') }}" method="POST">
        @csrf

        <x-input
            name="last_name"
            :label="__('messages.last_name')"
        />
        <x-error field="last_name" />

        <br>

        <x-input
            name="first_name"
            :label="__('messages.first_name')"
        />
        <x-error field="first_name" />

        <br>

        <div>
            <label for="biography" class="font-semibold text-teal-700">{{ __('messages.biography') }}</label><br>
            <textarea name="biography" id="biography" rows="5" cols="40">{{ old('biography') }}</textarea>
            <x-error field="biography" />
        </div>

        <br>

        <x-input
            name="birth_date"
            :label="__('messages.birth_date')"
            type="date"
        />
        <x-error field="birth_date" />

        <br>

        <div class="text-center py-3 bg-teal-100 hover:bg-teal-200 text-teal-700 rounded-3xl font-medium transition mt-10">
            <x-button type="submit">{{ __('messages.save') }}</x-button>
        </div>
    </form>
    </div>
</x-layout>
