<x-layout>
    <div class="max-w-2xl mx-auto">
        <a href="{{ route('books.index') }}" class="inline-flex items-center gap-2 text-teal-600 hover:text-teal-700 mb-8">
            {{ __('messages.back') }}
        </a>
        <div class="bg-white rounded-3xl shadow-xl p-10">
            <div class="flex gap-8">
                <div class="w-48 h-64 bg-gradient-to-br from-teal-400 to-slate-700 flex-shrink-0 rounded-3xl flex items-center justify-center text-8xl text-white">
                    📘
                </div>
                <div class="flex-1">
                    <h1 class="text-4xl font-bold mb-2">{{ __('messages.book_details') }}</h1>
                    <p class="text-teal-600 font-bold mb-2">{{ __('messages.title') }} : {{ $book->title }}</p>
                    <p>{{ __('messages.description') }} : {{ $book->description }}</p>
                    <p>{{ __('messages.publication_year') }} : {{ $book->publication_year }}</p>
                    <p>{{ __('messages.author') }} : {{ $book->author->first_name }} {{ $book->author->last_name }}</p>
                    <p>{{ __('messages.category') }} : {{ $book->category->name }}</p>

                    <div class="flex gap-4 py-8">
                        <p>
                            <a href="{{ route('books.edit', $book) }}" class="flex-1 text-center text-amber-700">
                        {{ __('messages.edit') }}</a>
                        </p>

                        <form action="{{ route('books.destroy', $book) }}" method="POST" onsubmit="return confirm('{{ __('messages.confirmation_book_delete') }}')">
                        @csrf
                        @method('DELETE')
                        <x-button type="submit" class="flex-1 text-red-700">
                        {{ __('messages.delete') }}</x-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
