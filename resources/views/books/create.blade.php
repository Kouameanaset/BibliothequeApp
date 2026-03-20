<h1>Ajouter un livre</h1>

<form action="{{ route('books.store') }}" method="POST">
    @csrf

    <input type="text" name="title" placeholder="Titre"><br>

    <textarea name="description" placeholder="Description"></textarea><br>

    <input type="number" name="publication_year" placeholder="Année"><br>

    <select name="author_id">
        @foreach($authors as $author)
            <option value="{{ $author->id }}">
                {{ $author->first_name }} {{ $author->last_name }}
            </option>
        @endforeach
    </select><br>

    <select name="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}">
                {{ $category->name }}
            </option>
        @endforeach
    </select><br>

    <button type="submit">Enregistrer</button>
</form>
