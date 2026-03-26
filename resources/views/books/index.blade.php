<x-layout>
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-4xl font-bold">{{ __('messages.list_books') ?? 'Book list' }}</h1>
        <a href="{{ route('books.create') }}"
           class="bg-teal-600 hover:bg-teal-700 text-white px-8 py-4 rounded-3xl flex items-center gap-3 text-lg font-medium">
            <i class="fas fa-plus"></i> {{ __('messages.add_book') ?? 'Add a book' }}
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        @forelse($books as $book)
            <x-book-card
                title="{{ $book->title }}"
                author="{{ $book->author->first_name ?? 'Unknown' }} {{ $book->author->last_name ?? 'Unknown'}}"
                category="{{ $book->category->name ?? '—' }}"
                year="{{ $book->publication_year ?? '—' }}"
                viewUrl="{{ route('books.show', $book) }}"
                editUrl="{{ route('books.edit', $book) }}"
                deleteUrl="{{ route('books.destroy', $book) }}" />
        @empty
            <p class="col-span-full text-center text-slate-500 py-12">{{__('messages.no_books')}}</p>
        @endforelse
    </div>
</x-layout>
