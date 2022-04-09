<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pagec;
use App\Http\Controllers\Postsc;
use Illuminate\Support\Facades\Auth;


Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/',[Pagec::class, 'index']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('posts');
