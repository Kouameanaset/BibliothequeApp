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

            <div class="text-center py-3 bg-teal-100 hover:bg-teal-200 text-teal-700 rounded-3xl font-medium transition mt-10">
            <x-button type="submit">{{ __('messages.save') }}</x-button>
            </div>

        </form>
    </div>
</x-layout>
