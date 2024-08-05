<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PublicController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [PubblicController::class, 'homepage'])->name('homepage');