<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un auteur</title>
</head>
<body>
<h1>Modifier un auteur</h1>

<p>
    <a href="{{ route('authors.index') }}">Retour à la liste</a>
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

<form action="{{ route('authors.update', $author) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="last_name">Nom</label><br>
        <input type="text" name="last_name" id="last_name" value="{{ old('last_name', $author->last_name) }}">
    </div>

    <br>

    <div>
        <label for="first_name">Prénom</label><br>
        <input type="text" name="first_name" id="first_name" value="{{ old('first_name', $author->first_name) }}">
    </div>

    <br>

    <div>
        <label for="biography">Biographie</label><br>
        <textarea name="biography" id="biography" rows="5" cols="40">{{ old('biography', $author->biography) }}</textarea>
    </div>

    <br>

    <div>
        <label for="birth_date">Date de naissance</label><br>
        <input type="date" name="birth_date" id="birth_date" value="{{ old('birth_date', $author->birth_date) }}">
    </div>

    <br>

    <button type="submit">Mettre à jour</button>
</form>
</body>
</html>
