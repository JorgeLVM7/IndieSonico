<?php

namespace IndieSonico\Http\Controllers;
use IndieSonico\Article;
use Illuminate\Http\Request;
use IndieSonico\Topten;


class PostController extends Controller
{
    public function index()
    {
        $tops = Topten::orderBy('id', 'DESC')->paginate();

        $articles = Article::orderBy('id', 'DESC')
            ->Where('category','=','Artículos')
            ->Where('approve','=', 'Aprobado')
            ->paginate();

        return view('post.index',compact('articles','tops'));
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view('post.show', compact('article'));
    }
}
