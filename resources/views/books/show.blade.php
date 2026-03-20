<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détail du livre</title>
</head>
<body>
<h1>Détail du livre</h1>

<p><a href="{{ route('books.index') }}">Retour à la liste</a></p>

<p><strong>Titre :</strong> {{ $book->title }}</p>
<p><strong>Description :</strong> {{ $book->description }}</p>
<p><strong>Année :</strong> {{ $book->publication_year }}</p>
<p><strong>Auteur :</strong> {{ $book->author->first_name }} {{ $book->author->last_name }}</p>
<p><strong>Catégorie :</strong> {{ $book->category->name }}</p>

<p>
    <a href="{{ route('books.edit', $book) }}">Modifier</a>
</p>

<form action="{{ route('books.destroy', $book) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Supprimer</button>
</form>
</body>
</html>
