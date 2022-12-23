<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SujetController;
use App\Http\Controllers\CategoryController;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('sujets', SujetController::class);
Route::resource('categories', CategoryController::class);
