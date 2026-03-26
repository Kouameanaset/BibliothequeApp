<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;


// Route pour changer la langue (en dehors du middleware)
Route::get('/lang/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'fr'])) {
        abort(400);
    }
    Session::put('locale', $locale);
    return redirect()->back();
})->name('lang.switch');


// Routes principales, protégées par le middleware
Route::middleware([SetLocale::class])->group(function () {
    // Redirige automatiquement vers la liste des livres
    Route::get('/', function () {
        return redirect()->route('books.index');
    });
    // Routes CRUD complètes pour les livres
    // (index, create, store, show, edit, update, destroy)
    Route::resource('books', BookController::class);
    // Routes CRUD pour les auteurs
    Route::resource('authors', AuthorController::class);
    // Routes CRUD pour les catégories
    Route::resource('categories', CategoryController::class);
});
