<?php

namespace Insonico\Http\Controllers;
use Insonico\Article;
use Illuminate\Http\Request;

class RandomController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->where('category','Random')->paginate();
        return view('random.index',compact('articles'));
    }
}
