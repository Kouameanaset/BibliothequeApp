<x-layout>
    <div class="max-w-xl mx-auto">
        <h1 class="text-4xl font-bold mb-8">{{ __('messages.edit_book') }}
        </h1>
        <a href="{{ route('books.index') }}" class="inline-flex items-center gap-2 text-teal-600 hover:text-teal-700 mb-6">← {{ __('messages.back') }}</a>

        <form action="{{ route('books.update', $book) }}" method="POST" class="bg-white rounded-3xl shadow-xl p-10">
            @csrf
            @method('PUT')

        <x-input
            name="title"
            :label="__('messages.title')"
            :value="$book->title"
            />
        <x-error field="title" />

        <div>
            <label for="description"
                   class="block text-teal-700 font-medium py-2"> {{ __('messages.description') }}</label><br>
            <textarea name="description" id="description" rows="5" class="w-full px-5 py-4 border border-slate-300 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 rounded-3xl outline-none transition">{{ old('description', $book->description) }}</textarea>
            <x-error field="description" />
        </div>

        <x-input
            name="publication_year"
            :label="__('messages.publication_year')"
            type="number"
            :value="$book->publication_year"
        />
        <x-error field="publication_year" />

        <div>
            <label for="author_id"
                   class="block text-teal-700 font-medium py-2">{{ __('messages.author') }}</label><br>
            <select name="author_id" id="author_id"
                    class="w-full px-5 py-4 border border-slate-300 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 rounded-3xl outline-none transition">
                <option value="">{{ __('messages.choose_author') }}</option>
                @foreach($authors as $author)
                    <option value="{{ $author->id }}" {{ old('author_id', $book->author_id) == $author->id ? 'selected' : '' }}>
                        {{ $author->first_name }} {{ $author->last_name }}
                    </option>
                @endforeach
            </select>
            <x-error field="author_id" />
        </div>

        <div>
            <label for="category_id"
                   class="block text-teal-700 font-medium py-2">{{ __('messages.category') }}</label><br>
            <select name="category_id" id="category_id"
                    class="w-full px-5 py-4 border border-slate-300 focus:border-teal-500 focus:ring-2 focus:ring-teal-200 rounded-3xl outline-none transition">
                <option value="">{{ __('messages.choose_category') }}</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id', $book->category_id) == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            <x-error field="category_id" />
        </div>

        <x-button type="submit"
                  class="flex-1 text-center py-3 text-orange-600 font-medium">{{ __('messages.update') }}</x-button>
    </form>
    </div>
</x-layout>
