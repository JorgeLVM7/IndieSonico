<?php

namespace IndieSonico\Http\Controllers;
use IndieSonico\Article;
use Illuminate\Support\Facades\DB;
use IndieSonico\Video;


class EntertainmentController extends Controller
{
    public function index()
    {
        $videos = Video::orderBy('id','DESC')
            ->where('category','=','Entretenimiento')
            ->paginate();
        // Inicializa @rownum
        DB::statement(DB::raw('SET @rownum = 0'));

        // Realiza la consulta
        $tops = DB::table('articles')
            ->select('id','head','path',DB::raw ('@rownum := @rownum + 1 as rownum'))
            ->where('approve', '=', 'Aprobado')
            ->where('important','=','Destacado')
            ->orderBy('id', 'DESC')
            ->paginate(5);

        // Inicializa @rownum
        DB::statement(DB::raw('SET @rownum1 = 0'));
        $tops2 = DB::table('articles')
            ->select('id','head','path',DB::raw ('@rownum1 := @rownum1 + 1 as rownum1'))
            ->where('approve', '=', 'Aprobado')
            ->where('important','=','Destacado')
            ->orderBy('id', 'DESC')
            ->paginate(3);

        $tops1 = Article::orderBy('id', 'DESC')
            ->where('approve','=','Aprobado')
            ->where('important','=','Destacado')
            ->limit(2)
            ->paginate(2);

//        $last_articles = Article::orderBy('id', 'DESC')
//            ->where('category', '=','Entretenimiento')
//            ->where('approve','Aprobado')
//            ->limit(1)
//            ->paginate(1);

        $category_tops = Article::orderBy('id', 'DESC')
            ->where('category', '=','Entretenimiento')
            ->where('important','=','Top Categoría')
            ->where('approve','=','Aprobado')
            ->limit(1)
            ->paginate(1);

        $subarticles=DB::table('articles')
            ->orderBy('id','DESC')
            ->where('category', '=','Entretenimiento')
            ->where('important','=','No Destacado')
            ->where('approve','=','Aprobado')
//            ->skip(1)->take(3)
//            ->get();
            ->limit(3)
            ->paginate(3);

        $articles = DB::table('articles')
            ->orderBy('id','DESC')
            ->where('category', '=','Entretenimiento')
            ->where('important','=','No Destacado')
            ->where('approve','=','Aprobado')
            ->skip(3)->take(100)
            ->get();
//            ->paginate();



        return view('entertainment.index',compact('articles','tops', 'tops1','tops2','last_articles','videos','category_tops','subarticles'));
    }

    public function show($id)
    {
        $videos = Video::orderBy('id','DESC')->paginate();

        // Inicializa @rownum
        DB::statement(DB::raw('SET @rownum = 0'));

        // Realiza la consulta
        $tops = DB::table('articles')
            ->select('id','head','path',DB::raw ('@rownum := @rownum + 1 as rownum'))
            ->where('approve', '=', 'Aprobado')
            ->where('important','=','Destacado')
            ->orderBy('id', 'DESC')
            ->paginate(5);

        // Inicializa @rownum
        DB::statement(DB::raw('SET @rownum1 = 0'));
        $tops2 = DB::table('articles')
            ->select('id','head','path',DB::raw ('@rownum1 := @rownum1 + 1 as rownum1'))
            ->where('approve', '=', 'Aprobado')
            ->where('important','=','Destacado')
            ->orderBy('id', 'DESC')
            ->paginate(3);

        $tops1 = Article::orderBy('id', 'DESC')
            ->where('approve','=','Aprobado')
            ->where('important','=','Destacado')
            ->limit(2)
            ->paginate(2);

        $article = Article::find($id);

        $bottoms = DB::table('articles')
            ->orderBy('id','DESC')
            ->where('category', '=','Entretenimiento')
            ->where('important','=','Destacado')
            ->where('approve','=','Aprobado')
            ->paginate(5);

        $mediums = DB::table('articles')
            ->orderBy('id')
            ->where('category', '=','Entretenimiento')
            ->where('important', '=','Destacado')
            ->where('approve','=','Aprobado')
            ->paginate(3);


        return view('entertainment.show', compact('article','tops','tops1','tops2', 'bottoms','mediums'));
    }
}