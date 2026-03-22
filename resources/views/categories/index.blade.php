<x-layout>
    <h1>{{ __('messages.list_categories') }}</h1>

    <p>
        <a href="{{ route('categories.create') }}">{{ __('messages.add_category') }}</a>
    </p>

    <table border="1" cellpadding="8">
        <thead>
        <tr>
            <th>{{ __('messages.name') }}</th>
            <th>{{ __('messages.number_of_books') }}</th>
            <th>{{ __('messages.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @forelse($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->books->count() }}</td>
                <td>
                    <a href="{{ route('categories.show', $category) }}">{{ __('messages.show') }}</a>
                    <a href="{{ route('categories.edit', $category) }}">{{ __('messages.edit') }}</a>

                    <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <x-button type="submit">{{ __('messages.delete') }}</x-button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">{{ __('messages.no_categories') }}</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</x-layout>
