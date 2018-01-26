<?php

namespace Insonico\Http\Controllers;
use Insonico\Article;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->where('category','Reseñas')->paginate();
        return view('review.index',compact('articles'));
    }
}
