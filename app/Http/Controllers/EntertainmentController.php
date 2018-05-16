<?php

namespace IndieSonico\Http\Controllers;
use IndieSonico\Article;
use Illuminate\Support\Facades\DB;
use IndieSonico\Video;


class EntertainmentController extends Controller
{
    public function index()
    {
        $videos = Video::orderBy('id','DESC')->paginate();


        $tops = Article::orderBy('id', 'DESC')
            ->where('approve','Aprobado')
            ->where('important','Destacado')
            ->limit(5)
            ->paginate(5);

        $tops1 = Article::orderBy('id', 'DESC')
            ->where('approve','Aprobado')
            ->where('important','Destacado')

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
            ->paginate();

        return view('entertainment.index',compact('articles','tops', 'tops1','last_articles','videos'));
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

        $bottoms = DB::table('articles')
            ->orderBy('id','DESC')
            ->where('category', '=','Entretenimiento')
            ->where('approve','Aprobado')
            ->where('important','Destacado')
            ->paginate(5);

        return view('entertainment.show', compact('article','tops','tops1','bottoms'));
    }
}