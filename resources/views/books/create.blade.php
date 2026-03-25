<x-layout>
    <div class="max-w-xl mx-auto">
        <h1 class="text-4xl font-bold mb-8">{{ __('messages.add_book')}}</h1>
        <a href="{{ route('books.index') }}" class="inline-flex items-center gap-2 text-teal-600 hover:text-teal-700 mb-6">← {{ __('messages.back') }}</a>

        <form action="{{ route('books.store') }}" method="POST" class="bg-white rounded-3xl shadow-xl p-10">
            @csrf

            <x-input name="title" :label="__('messages.title')" />
            <x-error field="title" />

            <x-input name="author_id" :label="__('messages.author')" />
            <x-error field="author_id" />

            <x-input name="category_id" :label="__('messages.category')" />
            <x-error field="category_id" />

            <x-input name="publication_year" :label="__('messages.publication_year')" type="number" />
            <x-error field="publication_year" />

            <div class="text-center py-3 bg-teal-100 hover:bg-teal-200 text-teal-700 rounded-3xl font-medium transition mt-10">
                <x-button type="submit">{{ __('messages.save') }}</x-button>
            </div>
        </form>
    </div>
</x-layout>
