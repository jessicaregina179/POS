<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.master');
});
Route::resource('/kategori', App\Http\Controllers\CategoryController::class);