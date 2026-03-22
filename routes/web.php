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

    Route::get('/', function () {
        return redirect()->route('books.index');
    });
    Route::resource('books', BookController::class);
    Route::resource('authors', AuthorController::class);
    Route::resource('categories', CategoryController::class);
});
