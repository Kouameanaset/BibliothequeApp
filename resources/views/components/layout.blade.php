<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Bibliothèque' }}</title>
</head>
<body>
<nav>
    <a href="{{ route('books.index') }}">Livres</a> |
    <a href="{{ route('authors.index') }}">Auteurs</a> |
    <a href="{{ route('categories.index') }}">Catégories</a>
</nav>

<hr>

@if(session('success'))
    <p style="color: green;">
        {{ session('success') }}
    </p>
@endif

{{ $slot }}
</body>
</html>
