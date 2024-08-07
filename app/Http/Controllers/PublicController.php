<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage()
    {
        $articles::take(6)->orderBy('created_at','desc')->get();
        return view('welcome', compact('articles'));
    }
}

