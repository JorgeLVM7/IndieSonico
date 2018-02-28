<?php

namespace IndieSonico\Http\Controllers;
use IndieSonico\Article;
use Illuminate\Http\Request;
use IndieSonico\Topten;


class ReviewController extends Controller
{
    public function index()
    {
        $tops = Topten::orderBy('id', 'DESC')->paginate();

        $articles = Article::orderBy('id', 'DESC')
            ->where('category','Reseñas')
            ->paginate();

        return view('review.index',compact('articles','tops'));
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view('review.show', compact('article'));
    }
}
