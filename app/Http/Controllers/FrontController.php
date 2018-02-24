<?php

namespace IndieSonico\Http\Controllers;
use IndieSonico\Article;
use Illuminate\Http\Request;
use IndieSonico\Topten;

class FrontController extends Controller
{
    public function index()
    {

       $tops = Topten::orderBy('id', 'DESC')->paginate();

        $articles = Article::orderBy('id', 'DESC')
            ->where('approve','Aprobado')
            ->paginate();

        return view('index',compact('articles','tops'));
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view('show', compact('article'));
    }


}
