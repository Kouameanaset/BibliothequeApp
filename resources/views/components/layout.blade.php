<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? __('messages.app_name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-slate-50 text-slate-800">

<header class="bg-slate-900 text-white shadow-sm">
    <div class="max-w-7xl mx-auto px-6 py-5 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <div class="w-11 h-11 bg-teal-500 rounded-2xl flex items-center justify-center text-3xl">📖</div>
            <h1 class="text-3xl font-bold tracking-tight">Library Collective</h1>
        </div>

<nav class="flex items-center gap-10 text-lg font-medium">
    <a href="{{ route('books.index') }}" class="hover:text-teal-400 transition-colors">{{__('messages.books')}}</a> |
    <a href="{{ route('authors.index') }}" class="hover:text-teal-400 transition-colors">{{ __('messages.authors') }}</a> |
    <a href="{{ route('categories.index') }}" class="hover:text-teal-400 transition-colors">{{ __('messages.categories') }}</a>
</nav>
    <div class="flex items-center gap-3 text-sm font-medium">
        <a href="{{ route('lang.switch', 'fr') }}" class="text-teal-400 hover:underline">FR</a>
        <span class="text-slate-400">|</span>
        <a href="{{ route('lang.switch', 'en') }}" class="hover:underline">EN</a>
    </div>
    </div>
</header>

<hr>

@if(session('success'))
    <div class="max-w-7xl mx-auto px-6 mt-6">
        <p class="bg-emerald-100 text-emerald-700 px-6 py-3 rounded-3xl font-medium">
            {{ session('success') }}
        </p>
    </div>
@endif

<main class="max-w-7xl mx-auto px-6 py-10">
    {{ $slot }}
</main>

<!-- Footer -->
<footer class="bg-slate-900 text-white py-6 text-center text-sm">
    © 2026 - Kouame | Zackary
</footer>

</body>
</html>
