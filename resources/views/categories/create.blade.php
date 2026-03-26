<x-layout>
    <div class="max-w-xl mx-auto">
        <h1 class="text-4xl font-bold mb-8">{{ __('messages.add_category') }}</h1>

    <a href="{{ route('categories.index') }}" class="inline-flex items-center gap-2 text-teal-600 hover:text-teal-700 mb-6">← {{ __('messages.back') }}</a>

        <form action="{{ route('categories.store') }}" method="POST" class="bg-white rounded-3xl shadow-xl p-10">
        @csrf

        <x-input
            name="name"
            :label="__('messages.name')"
        />
        <x-error field="name" />

            <div class="text-center py-3 rounded-3xl mt-10">
            <x-button class="inline-flex items-center justify-center w-full px-5 py-3 rounded-xl bg-teal-600 text-white font-semibold shadow-sm hover:bg-teal-700 transition" type="submit">{{ __('messages.save') }}</x-button>
            </div>

        </form>
    </div>
</x-layout>
