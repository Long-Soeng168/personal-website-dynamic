<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/blogs', [BlogController::class, 'index']);
Route::get('/admin/blogs/create', [BlogController::class, 'create']);
