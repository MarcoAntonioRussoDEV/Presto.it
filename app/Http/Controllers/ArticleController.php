<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use  App\Models\Category;

class ArticleController extends Controller
{
    public function create ()
    {
        return view('article.create');
    }

    public function byCategory(Category $category)
    {
        $articles = $category->articles->where('is_accepted', true);
        return view('article.byCategory', compact('articles', 'category'));
    }

    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    public function index()
    {
        $articles = Article::where('is_accepted', 1)->orderBy('created_at','desc')->paginate(5);
        return view('article.index', compact('articles'));
    }
    
    
}
