<x-layout>
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-4xl font-bold">{{ __('messages.list_authors') ?? 'Author list' }}</h1>
        <a href="{{ route('authors.create') }}"
           class="bg-teal-600 hover:bg-teal-700 text-white px-8 py-4 rounded-3xl flex items-center gap-3 text-lg font-medium">
            <i class="fas fa-plus"></i> {{ __('messages.add_author') ?? 'Add an author' }}
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        @forelse($authors as $author)
            <x-author-card
                name="{{ $author->first_name }} {{ $author->last_name }}"
                bookCount="{{ $author->books->count() }}"
                showUrl="{{ route('authors.show', $author) }} "
                editUrl="{{ route('authors.edit', $author) }}"
                deleteUrl="{{ route('authors.destroy', $author) }}" />
        @empty
            <p class="col-span-full text-center text-slate-500 py-12">No authors yet.</p>
        @endforelse
    </div>
</x-layout>
