<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GoogleLoginController;

// Homepage
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

// Articoli
Route::get('/create/article', [ArticleController::class, 'create'])->name('create.article')->middleware('auth');
Route::get('/category/{category}', [ArticleController::class, 'byCategory'])->name('byCategory');


// Article show
Route::get('/show/article/{article}', [ArticleController::class, 'show'])->name('article.show');

// Article index
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');

//google

Route::get('/google/redirect', [App\Http\Controllers\GoogleLoginController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/google/callback', [App\Http\Controllers\GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');

// Login Google
Route::get('/login/google/redirect', [GoogleLoginController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/login/google', [GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');

// Theme
Route::put('/theme/{theme}', function($request){
    session(['theme' => $request]);
    return back();
})->name('theme');