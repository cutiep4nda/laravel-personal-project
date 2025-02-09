<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\users;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function(){
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);

});

Route::middleware('auth')->group(function(){
    Route::get('/', [users::class, 'count'])->name('home');
    Route::post('/', [LoginController::class, 'signout']);
    Route::get('/upload-image', [ImageController::class, 'index'])->name('uploadimage');
    Route::post('/upload-image', [ImageController::class, 'store']);
    Route::get('/show-image', [ImageController::class, 'show'])->name('showimage');
});

Route::middleware(['auth', 'user-access:admin'])->group(function(){
    Route::get('/user-lists', [users::class, 'index'])->name('userlist');
    Route::delete('/user-lists/{id}', [users::class, 'destroy'])->name('delete');
    Route::get('add-user', function(){
        return view('pages.adduser');
    })->name('adduser');
    Route::post('/add-user', [users::class, 'store']);
});