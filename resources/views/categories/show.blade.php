<x-layout>
    <h1>{{ __('messages.category_details') }}</h1>

    <p>
        <a href="{{ route('categories.index') }}">{{ __('messages.back') }}</a>
    </p>

    <p><strong>{{ __('messages.name') }} :</strong> {{ $category->name }}</p>

    <h2>{{ __('messages.associated_books') }}</h2>

    @forelse($category->books as $book)
        <p>{{ $book->title }} ({{ $book->publication_year }})</p>
    @empty
        <p>{{ __('messages.no_books_for_category') }}</p>
    @endforelse

    <p>
        <a href="{{ route('categories.edit', $category) }}">{{ __('messages.edit') }}</a>
    </p>

    <form action="{{ route('categories.destroy', $category) }}" method="POST">
        @csrf
        @method('DELETE')
        <x-button type="submit">{{ __('messages.delete') }}</x-button>
    </form>
</x-layout>
