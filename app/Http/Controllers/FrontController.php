<?php

namespace IndieSonico\Http\Controllers;
use IndieSonico\Advertising;
use IndieSonico\Article;
use Illuminate\Http\Request;
use IndieSonico\Topten;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;


class FrontController extends Controller
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
            ->limit(1)
            ->paginate(1);


//        $articles = Article::orderBy('id', 'DESC')
//            ->where('approve','Aprobado')
//            ->orWhere('id' < ([$last_articles->id ]))
//            ->paginate();

        $articles = DB::table('articles')
            ->orderBy('id','DESC')
            ->where('approve','Aprobado')
            ->orwhere('id','<>',[$last_articles])
            ->paginate();


        return view('index',compact('articles','tops','tops1', 'last_articles'));
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

        return view('show', compact('article','tops','tops1'));
    }


}
