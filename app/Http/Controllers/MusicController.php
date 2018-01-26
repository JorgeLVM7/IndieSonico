<?php

namespace Insonico\Http\Controllers;
use Insonico\Article;
use Illuminate\Http\Request;


class MusicController extends Controller
{

    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->where('category','Música')->paginate();
        return view('music.index',compact('articles'));
    }

}
