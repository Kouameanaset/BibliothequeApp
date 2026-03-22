<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier une catégorie</title>
</head>
<body>
<h1>Modifier une catégorie</h1>

<p>
    <a href="{{ route('categories.index') }}">Retour à la liste</a>
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

<form action="{{ route('categories.update', $category) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="name">Nom</label><br>
        <input type="text" name="name" id="name" value="{{ old('name', $category->name) }}">
    </div>

    <br>

    <button type="submit">Mettre à jour</button>
</form>
</body>
</html>
