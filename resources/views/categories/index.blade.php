<x-layout>
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-4xl font-bold">{{ __('messages.list_categories') }}</h1>
        <a href="{{ route('categories.create') }}"
           class="bg-teal-600 hover:bg-teal-700 text-white px-8 py-4 rounded-3xl flex items-center gap-3 text-lg font-medium">
            <i class="fas fa-plus"></i> {{ __('messages.add_category') }}
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        @forelse($categories as $category)
            <x-category-card
                name="{{ $category->name }}"
                bookCount="{{ $category->books->count() }}"
                showUrl="{{ route('categories.show', $category) }}"
                editUrl="{{ route('categories.edit', $category) }}"
                deleteUrl="{{ route('categories.destroy', $category) }}" />
        @empty
            <p class="col-span-full text-center text-slate-500 py-12">{{ __('messages.no_categories') }}</p>
        @endforelse
    </div>
</x-layout>
