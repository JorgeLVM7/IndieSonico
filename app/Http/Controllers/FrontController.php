<?php

namespace IndieSonico\Http\Controllers;
use IndieSonico\Article;
use IndieSonico\Video;
use Illuminate\Support\Facades\DB;
class FrontController extends Controller
{
    public  function  index()
    {
        $videos = Video::orderBy('id','DESC')->paginate();

        // Inicializa @rownum
        DB::statement(DB::raw('SET @rownum = 0'));

        // Realiza la consulta
        $tops = DB::table('articles')
            ->select('id','head','path',DB::raw ('@rownum := @rownum + 1 as rownum'))
            ->where('approve', '=', 'Aprobado')
            ->where('important','Destacado')
            ->orderBy('id', 'DESC')
            ->paginate(5);

        // Inicializa @rownum
        DB::statement(DB::raw('SET @rownum1 = 0'));
        $tops2 = DB::table('articles')
            ->select('id','head','path',DB::raw ('@rownum1 := @rownum1 + 1 as rownum1'))
            ->where('approve', '=', 'Aprobado')
            ->where('important','Destacado')
            ->orderBy('id', 'DESC')
            ->paginate(3);

        $tops1 = Article::orderBy('id', 'DESC')
            ->where('approve','Aprobado')
            ->where('important','Destacado')
            ->limit(2)
            ->paginate(2);

        $last_articles = Article::orderBy('id', 'DESC')
            ->where('approve','Aprobado')
            ->limit(1)
            ->paginate(1);

        $category_top = Article::orderBy('id', 'DESC')
            ->where('important','IndieSonico')
            ->where('approve','Aprobado')
            ->limit(1)
            ->paginate(1);

        $articles = DB::table('articles')
            ->orderBy('id','DESC')
            ->where('approve','Aprobado')
            ->skip(1)->take(100)
            ->get();

        return view('index',compact('articles','tops','tops1','tops2', 'last_articles','videos','category_top'));
    }

    public function show($id)
    {
        //        Muestra el video de arriba 
        $videos = Video::orderBy('id','DESC')->paginate();

        //        Muestra 5 Noticias en el TOP 5 en Web
        DB::statement(DB::raw('SET @rownum = 0'));

        $tops = DB::table('articles')
            ->select('id','head','path',DB::raw ('@rownum := @rownum + 1 as rownum'))
            ->where('approve', '=', 'Aprobado')
            ->where('important','Destacado')
            ->orderBy('id', 'DESC')
            ->paginate(5);

        //        Muestra 3 Noticias en el TOP 5 en Tablet
        DB::statement(DB::raw('SET @rownum1 = 0'));

        $tops2 = DB::table('articles')
            ->select('id','head','path',DB::raw ('@rownum1 := @rownum1 + 1 as rownum1'))
            ->where('approve', '=', 'Aprobado')
            ->where('important','Destacado')
            ->orderBy('id', 'DESC')
            ->paginate(3);

        //        Muestra 2 Noticias en el TOP 5 en Móvil
        $tops1 = Article::orderBy('id', 'DESC')
            ->where('approve','Aprobado')
            ->where('important','Destacado')
            ->limit(2)
            ->paginate(2);




        $article = Article::find($id);

        $bottoms = DB::table('articles')
            ->orderBy('id','DESC')
            ->where('important', '=','Destacado')
            ->where('approve','Aprobado')
            ->paginate(9);

        $mediums = DB::table('articles')
            ->orderBy('id')
            ->where('important', '=','Destacado')
            ->where('approve','Aprobado')
            ->paginate(3);


        return view('show', compact('article','tops','tops1','tops2','bottoms','mediums','videos'));
    }
}
