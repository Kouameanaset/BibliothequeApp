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
            <textarea name="biography" id="biography" rows="5" cols="40" class="w-full px-5 py-4 border border-slate-300 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 rounded-3xl outline-none transition">{{ old('biography') }}</textarea>
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

        <div class="text-center py-3 rounded-3xl mt-10">
            <x-button class="inline-flex items-center justify-center w-full px-5 py-3 rounded-xl bg-teal-600 text-white font-semibold shadow-sm hover:bg-teal-700 transition" type="submit">{{ __('messages.save') }}</x-button>
        </div>
    </form>
    </div>
</x-layout>
