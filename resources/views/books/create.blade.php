<x-layout>
    <h1>{{__('messages.add_book')}}</h1>

    <p>
        <a href="{{ route('books.index') }}">{{__('messages.back')}}</a>
    </p>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <x-input name="title" label="{{__('messages.title')}}" />
        <x-error field="title" />

        <br>

        <div>
            <label for="description">{{__('messages.description')}}</label><br>
            <textarea name="description" id="description" rows="5" cols="40">{{ old('description') }}</textarea>
            <x-error field="description" />
        </div>

        <br>

        <x-input name="publication_year" label="{{__('messages.publication_year')}}" type="number" />
        <x-error field="publication_year" />

        <br>

        <div>
            <label for="author_id">{{__('messages.author')}}</label><br>
            <select name="author_id" id="author_id">
                <option value="">{{__('messages.choose_author')}}</option>
                @foreach($authors as $author)
                    <option value="{{ $author->id }}" {{ old('author_id') == $author->id ? 'selected' : '' }}>
                        {{ $author->first_name }} {{ $author->last_name }}
                    </option>
                @endforeach
            </select>
            <x-error field="author_id" />
        </div>

        <br>

        <div>
            <label for="category_id">{{__('messages.categories')}}</label><br>
            <select name="category_id" id="category_id">
                <option value="">{{__('messages.choose_category')}}</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            <x-error field="category_id" />
        </div>

        <br>

        <x-button type="submit">{{__('messages.save')}}</x-button>
    </form>
</x-layout>
