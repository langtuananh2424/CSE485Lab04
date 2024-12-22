<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReaderController;
use App\Http\Controllers\BorrowController;

Route::get('/', function () {
    return view('welcome');
});
// Book Route
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update');
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');

// Reader Route
Route::get('/readers', [ReaderController::class, 'index'])->name('readers.index');
Route::get('/readers/create', [ReaderController::class, 'create'])->name('readers.create');
Route::get('/readers/{reader}', [ReaderController::class, 'show'])->name('readers.show');
Route::post('/readers', [ReaderController::class, 'store'])->name('readers.store');
Route::get('/readers/{reader}/edit', [ReaderController::class, 'edit'])->name('readers.edit');
Route::put('/readers/{reader}', [ReaderController::class, 'update'])->name('readers.update');
Route::delete('/readers/{reader}', [ReaderController::class, 'destroy'])->name('readers.destroy');

// Borrow Route
Route::get('/borrows', [BorrowController::class, 'index'])->name('borrows.index');
Route::get('/borrows/create', [BorrowController::class, 'create'])->name('borrows.create');
Route::get('/borrows/{borrow}', [BorrowController::class, 'show'])->name('borrows.show');
Route::post('/borrows', [BorrowController::class, 'store'])->name('borrows.store');
Route::get('/borrows/{borrow}/edit', [BorrowController::class, 'edit'])->name('borrows.edit');
Route::put('/borrows/{borrow}', [BorrowController::class, 'update'])->name('borrows.update');
Route::delete('/borrows/{borrow}', [BorrowController::class, 'destroy'])->name('borrows.destroy');
