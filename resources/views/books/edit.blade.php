<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un livre</title>
</head>
<body>
<h1>Modifier un livre</h1>

<p>
    <a href="{{ route('books.index') }}">Retour à la liste</a>
</p>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('books.update', $book) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="title">Titre</label><br>
        <input type="text" name="title" id="title" value="{{ old('title', $book->title) }}">
    </div>

    <br>

    <div>
        <label for="description">Description</label><br>
        <textarea name="description" id="description" rows="5" cols="40">{{ old('description', $book->description) }}</textarea>
    </div>

    <br>

    <div>
        <label for="publication_year">Année de publication</label><br>
        <input type="number" name="publication_year" id="publication_year" value="{{ old('publication_year', $book->publication_year) }}">
    </div>

    <br>

    <div>
        <label for="author_id">Auteur</label><br>
        <select name="author_id" id="author_id">
            <option value="">Choisir un auteur</option>
            @foreach($authors as $author)
                <option value="{{ $author->id }}" {{ old('author_id', $book->author_id) == $author->id ? 'selected' : '' }}>
                    {{ $author->first_name }} {{ $author->last_name }}
                </option>
            @endforeach
        </select>
    </div>

    <br>

    <div>
        <label for="category_id">Catégorie</label><br>
        <select name="category_id" id="category_id">
            <option value="">Choisir une catégorie</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id', $book->category_id) == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>

    <br>

    <button type="submit">Mettre à jour</button>
</form>
</body>
</html>
