<h1>Liste des livres</h1>

<a href="{{ route('books.create') }}">Ajouter un livre</a>

<table border="1">
    <tr>
        <th>Titre</th>
        <th>Auteur</th>
        <th>Catégorie</th>
        <th>Année</th>
        <th>Actions</th>
    </tr>

    @foreach($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author->first_name }} {{ $book->author->last_name }}</td>
            <td>{{ $book->category->name }}</td>
            <td>{{ $book->publication_year }}</td>
            <td>
                <a href="{{ route('books.show', $book) }}">Voir</a>
                <a href="{{ route('books.edit', $book) }}">Modifier</a>

                <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
