<?php

namespace IndieSonico\Http\Controllers;
use IndieSonico\Article;
use Illuminate\Support\Facades\DB;


class EntertainmentController extends Controller
{
    public function index()
    {

        $tops = Article::orderBy('id', 'DESC')
            ->where('approve','Aprobado')
            ->limit(5)
            ->paginate(5);

        $tops1 = Article::orderBy('id', 'DESC')
            ->where('approve','Aprobado')
            ->limit(2)
            ->paginate(2);

        $last_articles = Article::orderBy('id', 'DESC')
            ->where('category', '=','Entretenimiento')
            ->limit(1)
            ->paginate(1);

        $articles = DB::table('articles')
            ->orderBy('id','DESC')
            ->where('category', '=','Entretenimiento')
            ->where('approve','Aprobado')
//            ->orwhere('id','<>',[$last_articles])
            ->paginate();

        return view('entertainment.index',compact('articles','tops', 'tops1','last_articles'));
    }

    public function show($id)
    {
        $tops = Article::orderBy('id', 'DESC')
            ->where('approve','Aprobado')
            ->limit(5)
            ->paginate(5);

        $tops1 = Article::orderBy('id', 'DESC')
            ->where('approve','Aprobado')
            ->limit(2)
            ->paginate(2);

        $article = Article::find($id);

        return view('entertainment.show', compact('article','tops','tops1'));
    }
}
