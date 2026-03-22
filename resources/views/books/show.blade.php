<x-layout>
    <h1>{{ __('messages.book_details') }}</h1>

    <p>
        <a href="{{ route('books.index') }}">{{ __('messages.back') }}</a>
    </p>

    <p><strong>{{ __('messages.title') }} :</strong> {{ $book->title }}</p>
    <p><strong>{{ __('messages.description') }} :</strong> {{ $book->description }}</p>
    <p><strong>{{ __('messages.publication_year') }} :</strong> {{ $book->publication_year }}</p>
    <p><strong>{{ __('messages.author') }} :</strong> {{ $book->author->first_name }} {{ $book->author->last_name }}</p>
    <p><strong>{{ __('messages.category') }} :</strong> {{ $book->category->name }}</p>

    <p>
        <a href="{{ route('books.edit', $book) }}">{{ __('messages.edit') }}</a>
    </p>

    <form action="{{ route('books.destroy', $book) }}" method="POST">
        @csrf
        @method('DELETE')
        <x-button type="submit">{{ __('messages.delete') }}</x-button>
    </form>
</x-layout>
