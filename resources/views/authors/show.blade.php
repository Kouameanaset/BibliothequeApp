<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détail de l'auteur</title>
</head>
<body>
<h1>Détail de l'auteur</h1>

<p>
    <a href="{{ route('authors.index') }}">Retour à la liste</a>
</p>

<p><strong>Nom :</strong> {{ $author->last_name }}</p>
<p><strong>Prénom :</strong> {{ $author->first_name }}</p>
<p><strong>Date de naissance :</strong> {{ $author->birth_date }}</p>
<p><strong>Biographie :</strong> {{ $author->biography }}</p>

<h2>Livres associés</h2>

@forelse($author->books as $book)
    <p>{{ $book->title }} ({{ $book->publication_year }})</p>
@empty
    <p>Aucun livre pour cet auteur.</p>
@endforelse

<p>
    <a href="{{ route('authors.edit', $author) }}">Modifier</a>
</p>

<form action="{{ route('authors.destroy', $author) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Supprimer</button>
</form>
</body>
</html>
