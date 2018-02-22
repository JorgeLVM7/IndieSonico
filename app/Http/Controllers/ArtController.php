<?php

namespace IndieSonico\Http\Controllers;
use IndieSonico\Article;
use Illuminate\Http\Request;

class ArtController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->where('category','Arte')->paginate();
        return view('art.index',compact('articles'));
    }
    public function show($id)
    {
        $article = Article::find($id);
        return view('art.show', compact('article'));
    }
}
