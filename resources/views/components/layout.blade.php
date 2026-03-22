<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? __('messages.app_name') }}</title>
</head>
<body>
<nav>
    <a href="{{ route('books.index') }}">{{__('messages.books')}}</a> |
    <a href="{{ route('authors.index') }}">{{ __('messages.authors') }}</a> |
    <a href="{{ route('categories.index') }}">{{ __('messages.categories') }}</a>
    <p>
        <a href="{{ route('lang.switch', 'fr') }}">FR</a> |
        <a href="{{ route('lang.switch', 'en') }}">EN</a>
    </p>
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
