<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ShelfController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(ShelfController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'index')->name('index');
    Route::post('/shelves', 'store')->name('store');
    Route::get('/shelves/create', 'create')->name('create');
    Route::get('/shelves/{shelf}', 'show')->name('show');
    Route::delete('/shelves/{shelf}', 'delete')->name('delete');
});

Route::controller(BookController::class)->middleware(['auth'])->group(function(){
    Route::get('/books', 'book')->name('books');
    Route::get('/books/new', 'newBook')->name('newBook');
    Route::post('/books', 'add')->name('add');
    Route::post('/books/{book}', 'uproad')->name('uproad');
    Route::get('/duplication','duplication')->name('duplication');
    Route::get('/books/{book}/detail', 'detail')->name('detail');
    Route::get('/books/register/{book}', 'register')->name('register');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';
