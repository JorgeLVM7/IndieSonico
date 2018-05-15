<?php

namespace IndieSonico\Http\Controllers;
use IndieSonico\Advertising;
use IndieSonico\Article;
use IndieSonico\Video;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;


class FrontController extends Controller
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
            ->where('approve','Aprobado')
            ->limit(1)
            ->paginate(1);



        $articles = DB::table('articles')
            ->orderBy('id','DESC')
            ->where('approve','Aprobado')
            ->paginate();


        return view('index',compact('articles','tops','tops1', 'last_articles','videos'));
    }

    public function show($id)
    {

        $tops1 = Article::orderBy('id', 'DESC')
            ->where('approve','Aprobado')
            ->limit(2)
            ->paginate(2);

        $tops = Article::orderBy('id', 'DESC')
            ->limit(5)
            ->paginate(5);
        $article = Article::find($id);

        $bottoms = DB::table('articles')
            ->orderBy('id','DESC')
            ->where('important', '=','Destacado')
            ->where('approve','Aprobado')
            ->paginate(9);


        return view('show', compact('article','tops','tops1','bottoms'));
    }


}
