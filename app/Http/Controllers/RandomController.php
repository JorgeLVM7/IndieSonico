<?php

namespace IndieSonico\Http\Controllers;
use IndieSonico\Article;
use Illuminate\Http\Request;
use IndieSonico\Topten;
use IndieSonico\Http\Requests\ArticleRequest;
use Auth;

class RandomController extends Controller
{
    public function index()
    {
        $tops = Topten::orderBy('id', 'DESC')->paginate();

        $articles = Article::orderBy('id', 'DESC')
            ->where('category','Random')
            ->Where('approve', '=','Aprobado')
            ->paginate();
        return view('random.index',compact('articles', 'tops'));
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view('random.show', compact('article'));
    }
}
