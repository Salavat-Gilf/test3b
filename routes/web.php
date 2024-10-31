<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/books', [BookController::class, 'index'])->name('books');
Route::get('/book/{id}', [BookController::class, 'show']);
Route::get('/create', [BookController::class, 'create'])->name('create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');