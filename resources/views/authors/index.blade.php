<x-layout>
    <h1>{{ __('messages.list_authors') }}</h1>

    <p>
        <a href="{{ route('authors.create') }}">{{ __('messages.add_author') }}</a>
    </p>

    <table border="1" cellpadding="8">
        <thead>
        <tr>
            <th>{{ __('messages.last_name') }}</th>
            <th>{{ __('messages.first_name') }}</th>
            <th>{{ __('messages.birth_date') }}</th>
            <th>{{ __('messages.number_of_books') }}</th>
            <th>{{ __('messages.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @forelse($authors as $author)
            <tr>
                <td>{{ $author->last_name }}</td>
                <td>{{ $author->first_name }}</td>
                <td>{{ $author->birth_date }}</td>
                <td>{{ $author->books->count() }}</td>
                <td>
                    <a href="{{ route('authors.show', $author) }}">{{ __('messages.show') }}</a>
                    <a href="{{ route('authors.edit', $author) }}">{{ __('messages.edit') }}</a>

                    <form action="{{ route('authors.destroy', $author) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <x-button type="submit">{{ __('messages.delete') }}</x-button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">{{ __('messages.no_authors') }}</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</x-layout>
