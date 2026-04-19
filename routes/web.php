<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

Route::get('/authors', [AuthorController::class, 'index']);

Route::post('/authors', [AuthorController::class, 'store']);


Route::get('/', function () {
    return view('welcome');
});
