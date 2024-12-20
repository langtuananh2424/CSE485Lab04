<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('borrow.index');
});

Route::resource('books', 'BorrowController');
Route::resource('readers', 'ReaderController');
Route::resource('borrows', 'BorrowController');
