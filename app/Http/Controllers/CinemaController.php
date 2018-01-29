<?php

namespace Insonico\Http\Controllers;
use Insonico\Article;
use Illuminate\Http\Request;
use Insonico\Http\Requests\ArticleRequest;
use Auth;


class CinemaController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->where('category','Cine')->paginate();
        return view('cinema.index',compact('articles'));

    }

    public function show($id)
    {
        $article = Article::find($id);
        return view('cinema.show', compact('article'));
    }
}

