<?php

namespace IndieSonico\Http\Controllers;
use IndieSonico\Article;
use IndieSonico\Video;

use IndieSonico\Advertising;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SessionsISController extends Controller
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
            ->where('category', '=','Sesiones IS')
            ->limit(1)
            ->paginate(1);

        $articles = DB::table('articles')
            ->orderBy('id','DESC')
            ->where('category', '=','Sesiones IS')
            ->where('approve','Aprobado')
            ->paginate();

        return view('sessionsis.index',compact('articles','tops', 'tops1','last_articles','videos'));
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
            ->where('category', '=','Sesiones IS')
            ->where('important','Destacado')
            ->where('approve','Aprobado')
            ->paginate(5);

        return view('sessionsis.show', compact('article','tops','tops1','bottoms'));
    }
}