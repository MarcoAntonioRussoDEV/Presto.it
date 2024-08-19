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
        $articles6 = Article::where('is_accepted', true)->take(6)->orderBy('created_at','desc')->get();
        $articles3 = Article::where('is_accepted', true)->take(3)->orderBy('created_at','desc')->get();
        return view('welcome', compact('articles6','articles3'));
    }

    public function themeHandler($request){
        session(['theme' => $request->theme]);
        return back();
        
    }

    public function searchArticles(Request $request)
    {
        $query = $request->input('query');
        $articles = Article::search($query)->where('is_accepted', true)->paginate(10);
        return view('article.searched', ['articles' => $articles, 'query' => $query]);
    }

}


