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
        return view('article.byCategory', ['articles' => $category->articles, 'category' => $category]);
    }

    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate(6);
        return view('article.index', compact('articles'));
    }

    
}
