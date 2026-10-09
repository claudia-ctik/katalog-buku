<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;


//p1
Route::view('/profil-kelas', 'profil-kelas')
    ->name('profil-kelas');

//p2
Route::get('/books',[BookController::class, 'index'])
    ->name('books.index');

// Route::get('/books/{id}', [BookController::class, 'show'])
//     ->whereNumber('id')
//     ->name('books.show');

Route::get('/books/{book}/edit', [BookController::class, 'edit'])
    ->name('books.edit');

//p4
Route::view('/','home')->name('home');
Route::resource('books', BookController::class);
