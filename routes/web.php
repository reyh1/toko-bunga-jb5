<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\PostController;
use App\Http\Controllers\TambahController;

Route::get('/', function () {
    return view('welcome');
}); 

Route::resource('/posts', \App\Http\Controllers\PostController::class);
Route::resource('/home', \App\Http\Controllers\HomeController::class);
