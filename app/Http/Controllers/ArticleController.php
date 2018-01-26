<?php

namespace Insonico\Http\Controllers;

use Illuminate\Http\Request;
use Insonico\Article;
use Insonico\Http\Requests\ArticleRequest;
use Auth;


class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->paginate();
        return view('articles.index',compact('articles'));

    }
    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show', compact('article'));
    }

    public function store(ArticleRequest $request)
    {
        $article = new Article;

        $article ->head = $request ->head;
        $article ->description = $request ->description;
        $article ->body = $request -> body;
        $article ->category = $request ->category;
        $article ->autor = Auth::user()->name.' '.Auth::user()->last_name;
        $article ->approve = 'No Aprobado';
        $article ->path = $request ->path;
        $article->video =$request->video;

        $article ->save();

        return redirect()-> route('articles.index')
            ->with('info','El artículo fue guardado correctamente');

    }

    public function create()
    {
        return view('articles.create');
    }



    public function update(ArticleRequest $request, $id)
    {
        $article = Article::find($id);

        $article ->head = $request ->head;
        $article ->description = $request ->description;
        $article ->body = $request -> body;
        $article ->category = $request ->category;
        $article ->autor = Auth::user()->name.' '.Auth::user()->last_name;
        $article ->approve= 'No Aprobado';
        $article ->path = $request ->path;
        $article->video =$request->video;



        $article ->save();

        return redirect()-> route('articles.index')
            ->with('info','El artículo fue actualizado correctamente');

    }

    public function destroy($id)
    {
        $article = Article::find($id);
        $article ->delete();
        return back()->with('info','El artículo fue eliminado correctamente');
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }
}
