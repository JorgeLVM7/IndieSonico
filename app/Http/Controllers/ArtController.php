<?php

namespace IndieSonico\Http\Controllers;
use IndieSonico\Article;
use Illuminate\Http\Request;
use IndieSonico\Topten;
use IndieSonico\Http\Requests\ArticleRequest;
use Auth;

class ArtController extends Controller
{
    public function index()
    {
        $tops = Topten::orderBy('id', 'DESC')->paginate();

        $articles = Article::orderBy('id', 'DESC')
            ->where('category','Arte')
            ->orWhere('approve', 'Aprobado')
            ->paginate();
        return view('art.index',compact('articles','tops'));
    }
    public function show($id)
    {
        $article = Article::find($id);
        return view('art.show', compact('article'));
    }
}
