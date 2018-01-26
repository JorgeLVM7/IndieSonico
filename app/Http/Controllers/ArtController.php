<?php

namespace Insonico\Http\Controllers;
use Insonico\Article;
use Illuminate\Http\Request;

class ArtController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->where('category','Arte')->paginate();
        return view('art.index',compact('articles'));
    }
}
