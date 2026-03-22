<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::with('books')->get();
        return view('authors.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAuthorRequest $request)
    {
        /*
        $data = $request->validate([
            'last_name' => ['required'],
            'first_name' => ['required'],
            'biography' => ['required'],
            'birth_date' => ['required', 'date'],
        ]);
        */

        Author::create($request->validated());
        return redirect()->route('authors.index')->with('success', 'Auteur ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        $author->load('books');

        return view('authors.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        return view('authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAuthorRequest $request, Author $author)
    {
        /*
        $data = $request->validate([
            'last_name' => ['required'],
            'first_name' => ['required'],
            'biography' => ['required'],
            'birth_date' => ['required', 'date'],
        ]);
        */

        $author->update($request->validated());
        return redirect()->route('authors.index')->with('success', 'Auteur modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete();

        return redirect()->route('authors.index')->with('success', 'Auteur supprimé avec succès.');
    }
}
