<x-layout>
    <div class="max-w-2xl mx-auto">

        <a href="{{ route('categories.index') }}" class="inline-flex items-center gap-2 text-teal-600 hover:text-teal-700 mb-8">
            {{ __('messages.back') }}
        </a>

        <div class="bg-white rounded-3xl shadow-xl p-10">
            <div class="gap-8">

                <h1 class="font-semibold text-2xl mb-2">{{ __('messages.category_details') }}</h1>
                <p class="text-teal-500"><strong>{{ __('messages.name') }} :</strong> {{ $category->name }}</p>
                <h2 class="text-teal-500 font-semibold">{{ __('messages.associated_books') }}</h2>
                @forelse($category->books as $book)
                    <p>{{ $book->title }} ({{ $book->publication_year }})</p>
                @empty
                    <p>{{ __('messages.no_books_for_category') }}</p>
                @endforelse
                <div class="flex gap-4 py-3">
                <p>
                    <a href="{{ route('categories.edit', $category) }} " class="flex-1 text-center text-amber-700">{{ __('messages.edit') }}</a>
                </p>

                    <form action="{{ route('categories.destroy', $category) }}" class="flex-1 text-red-700" method="POST">
                        @csrf
                        @method('DELETE')
                        <x-button type="submit">{{ __('messages.delete') }}</x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
