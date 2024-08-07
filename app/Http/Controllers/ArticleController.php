<?php

namespace App\Http\Controllers;

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
}
