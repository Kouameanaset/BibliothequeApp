<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Catégories</title>
</head>
<body>
<h1>Liste des catégories</h1>

@if(session('success'))
    <p style="color: green;">
        {{ session('success') }}
    </p>
@endif

<p>
    <a href="{{ route('categories.create') }}">Ajouter une catégorie</a>
</p>

<table border="1" cellpadding="8">
    <thead>
    <tr>
        <th>Nom</th>
        <th>Nombre de livres</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @forelse($categories as $category)
        <tr>
            <td>{{ $category->name }}</td>
            <td>{{ $category->books->count() }}</td>
            <td>
                <a href="{{ route('categories.show', $category) }}">Voir</a>
                <a href="{{ route('categories.edit', $category) }}">Modifier</a>

                <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="3">Aucune catégorie trouvée.</td>
        </tr>
    @endforelse
    </tbody>
</table>

<p>
    <a href="{{ route('books.index') }}">Voir les livres</a>
</p>
</body>
</html>
