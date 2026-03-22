<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détail de la catégorie</title>
</head>
<body>
<h1>Détail de la catégorie</h1>

<p>
    <a href="{{ route('categories.index') }}">Retour à la liste</a>
</p>

<p><strong>Nom :</strong> {{ $category->name }}</p>

<h2>Livres associés</h2>

@forelse($category->books as $book)
    <p>{{ $book->title }} ({{ $book->publication_year }})</p>
@empty
    <p>Aucun livre dans cette catégorie.</p>
@endforelse

<p>
    <a href="{{ route('categories.edit', $category) }}">Modifier</a>
</p>

<form action="{{ route('categories.destroy', $category) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Supprimer</button>
</form>
</body>
</html>
