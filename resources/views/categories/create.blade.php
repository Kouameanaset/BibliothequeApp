<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter une catégorie</title>
</head>
<body>
<h1>Ajouter une catégorie</h1>

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

<form action="{{ route('categories.store') }}" method="POST">
    @csrf

    <div>
        <label for="name">Nom</label><br>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
    </div>

    <br>

    <button type="submit">Enregistrer</button>
</form>
</body>
</html>
