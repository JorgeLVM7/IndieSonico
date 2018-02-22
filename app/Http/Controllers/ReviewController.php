<?php

namespace IndieSonico\Http\Controllers;
use IndieSonico\Article;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->where('category','Reseñas')->paginate();
        return view('review.index',compact('articles'));
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view('review.show', compact('article'));
    }
}
