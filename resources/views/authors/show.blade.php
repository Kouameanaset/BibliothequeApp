<x-layout>
    <div class="max-w-2xl mx-auto">
    <h1 class="text-4xl font-bold mb-2">{{ __('messages.author_details') }}</h1>

        <a href="{{ route('authors.index') }}" class="inline-flex items-center gap-2 text-teal-600 hover:text-teal-700 mb-8">
            {{ __('messages.back') }}
        </a>

        <div class="bg-white rounded-3xl shadow-xl p-10">
            <p class="text-teal-600 font-bold mb-2"><strong>{{ __('messages.last_name') }} :</strong> {{ $author->last_name }}</p>
            <p class="text-teal-600 font-bold mb-2"><strong>{{ __('messages.first_name') }} :</strong> {{ $author->first_name }}</p>
            <p class="text-teal-600 font-bold mb-2"><strong>{{ __('messages.birth_date') }} :</strong> {{ $author->birth_date }}</p>
            <p class="text-teal-600 font-bold mb-2"><strong>{{ __('messages.biography') }} :</strong> {{ $author->biography }}</p>

            <div class="py-3">
                <h2 class="text-teal-600 font-bold">{{ __('messages.associated_books') }}</h2>

                @forelse($author->books as $book)
                    <p>{{ $book->title }} ({{ $book->publication_year }})</p>
                @empty
                    <p>{{ __('messages.no_books_for_author') }}</p>
                @endforelse
            </div>
            <div class="flex gap-4 py-3">
            <p>
                <a href="{{ route('authors.edit', $author) }}" class="flex-1 text-center text-amber-700">{{ __('messages.edit') }}</a>
            </p>

        <form action="{{ route('authors.destroy', $author) }}" class="flex-1 text-red-700" method="POST" onsubmit="return confirm('{{ __('messages.confirmation_author_delete') }}')">
            @csrf
            @method('DELETE')
            <x-button type="submit">{{ __('messages.delete') }}</x-button>
        </form>
            </div>
        </div>
    </div>
</x-layout>
