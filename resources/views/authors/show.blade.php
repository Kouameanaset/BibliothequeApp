<x-layout>
    <h1>{{ __('messages.author_details') }}</h1>

    <p>
        <a href="{{ route('authors.index') }}">{{ __('messages.back') }}</a>
    </p>

    <p><strong>{{ __('messages.last_name') }} :</strong> {{ $author->last_name }}</p>
    <p><strong>{{ __('messages.first_name') }} :</strong> {{ $author->first_name }}</p>
    <p><strong>{{ __('messages.birth_date') }} :</strong> {{ $author->birth_date }}</p>
    <p><strong>{{ __('messages.biography') }} :</strong> {{ $author->biography }}</p>

    <h2>{{ __('messages.associated_books') }}</h2>

    @forelse($author->books as $book)
        <p>{{ $book->title }} ({{ $book->publication_year }})</p>
    @empty
        <p>{{ __('messages.no_books_for_author') }}</p>
    @endforelse

    <p>
        <a href="{{ route('authors.edit', $author) }}">{{ __('messages.edit') }}</a>
    </p>

    <form action="{{ route('authors.destroy', $author) }}" method="POST">
        @csrf
        @method('DELETE')
        <x-button type="submit">{{ __('messages.delete') }}</x-button>
    </form>
</x-layout>
