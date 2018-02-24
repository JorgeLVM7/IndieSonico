<?php

namespace IndieSonico\Http\Controllers;
use IndieSonico\Article;
use Illuminate\Http\Request;


class MusicController extends Controller
{

    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')
            ->where('category','Música')->paginate();
        return view('music.index',compact('articles'));
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view('music.show', compact('article'));
    }
}
