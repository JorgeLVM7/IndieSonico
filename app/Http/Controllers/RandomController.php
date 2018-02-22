<?php

namespace IndieSonico\Http\Controllers;
use IndieSonico\Article;
use Illuminate\Http\Request;

class RandomController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->where('category','Random')->paginate();
        return view('random.index',compact('articles'));
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view('random.show', compact('article'));
    }
}
