<?php

namespace IndieSonico\Http\Controllers;
use IndieSonico\Article;
use Illuminate\Http\Request;

class ConcertController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->where('category','Conciertos')->paginate();
        return view('concert.index',compact('articles'));
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view('concert.show', compact('article'));
    }
}
