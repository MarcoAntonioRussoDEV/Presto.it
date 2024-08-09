<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;
use App\Providers\AppServiceProvider;

class PublicController extends Controller
{
    public function homepage()
    {
        $articles = Article::take(6)->orderBy('created_at','desc')->get();
        return view('welcome', compact('articles'));
    }

    public function themeHandler($request){
        session(['theme' => $request->theme]);
        return back();
        
    }

}

