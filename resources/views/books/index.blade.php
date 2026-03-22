<x-layout>
    <h1>{{__('messages.list_books')}}</h1>

    <p>
        <a href="{{ route('books.create') }}">{{__('messages.add_book')}}</a>
    </p>

    <table border="1" cellpadding="8">
        <thead>
        <tr>
            <th>{{__('messages.title')}}</th>
            <th>{{__('messages.author')}}</th>
            <th>{{__('messages.category')}}</th>
            <th>{{__('messages.publication_year')}}</th>
            <th>{{__('messages.actions')}}</th>
        </tr>
        </thead>
        <tbody>
        @forelse($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author->first_name }} {{ $book->author->last_name }}</td>
                <td>{{ $book->category->name }}</td>
                <td>{{ $book->publication_year }}</td>
                <td>
                    <a href="{{ route('books.show', $book) }}">{{__('messages.show')}}</a>
                    <a href="{{ route('books.edit', $book) }}">{{__('messages.edit')}}</a>

                    <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <x-button type="submit">{{__('messages.delete')}}</x-button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">{{__('messages.no_books')}}</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</x-layout>
