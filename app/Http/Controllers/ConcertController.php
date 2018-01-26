<?php

namespace Insonico\Http\Controllers;
use Insonico\Article;
use Illuminate\Http\Request;

class ConcertController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->where('category','Conciertos')->paginate();
        return view('concert.index',compact('articles'));
    }
}
