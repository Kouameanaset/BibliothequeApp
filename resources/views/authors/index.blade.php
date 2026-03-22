<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Auteurs</title>
</head>
<body>
<h1>Liste des auteurs</h1>

@if(session('success'))
    <p style="color: green;">
        {{ session('success') }}
    </p>
@endif

<p>
    <a href="{{ route('authors.create') }}">Ajouter un auteur</a>
</p>

<table border="1" cellpadding="8">
    <thead>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Date de naissance</th>
        <th>Nombre de livres</th>
        <th>Actions</th>
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
                <a href="{{ route('authors.show', $author) }}">Voir</a>
                <a href="{{ route('authors.edit', $author) }}">Modifier</a>

                <form action="{{ route('authors.destroy', $author) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5">Aucun auteur trouvé.</td>
        </tr>
    @endforelse
    </tbody>
</table>

<p>
    <a href="{{ route('books.index') }}">Voir les livres</a>
</p>
</body>
</html>
