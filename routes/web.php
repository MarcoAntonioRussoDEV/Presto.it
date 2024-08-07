<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

// Homepage
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

// Articoli
Route::get('/create/article', [ArticleController::class, 'create'])->name('create.article')->middleware('auth');
Route::get('/category/{category}', [ArticleController::class, 'byCategory'])->name('byCategory');

<<<<<<< HEAD

// Article show
Route::get('/show/article/{article}', [ArticleController::class, 'show'])->name('article.show');
=======
Route::get('/article/index', [ArticleController::classs, 'index'])->name('article.index');

>>>>>>> 189b653e25dcd9571bde207d112cddf4e4651069
