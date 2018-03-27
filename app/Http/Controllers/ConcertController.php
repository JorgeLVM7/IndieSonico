<?php

namespace IndieSonico\Http\Controllers;
use IndieSonico\Article;
use IndieSonico\Advertising;
use Illuminate\Http\Request;
use IndieSonico\Topten;
use IndieSonico\Http\Requests\ArticleRequest;
use Auth;

class ConcertController extends Controller
{
    public function index()
    {
        $banners1= Advertising::orderBy ('id', 'DESC')
            ->where('id','=','1')
            ->paginate(3);

        $banners2= Advertising::orderBy ('id', 'DESC')
            ->where('id','=','2')
            ->paginate(3);

        $banners3= Advertising::orderBy ('id', 'DESC')
            ->where('id','=','3')
            ->paginate(3);

        $tops = Topten::orderBy('id', 'DESC')->paginate();

        $articles = Article::orderBy('id', 'DESC')
            ->where('category','Conciertos')
            ->Where('approve', '=','Aprobado')
            ->paginate();
        return view('concert.index',compact('articles', 'tops','banners1','banners2','banners3'));
    }

    public function show($id)
    {
        $banners1= Advertising::orderBy ('id', 'DESC')
            ->where('id','=','1')
            ->paginate(3);

        $banners2= Advertising::orderBy ('id', 'DESC')
            ->where('id','=','2')
            ->paginate(3);

        $banners3= Advertising::orderBy ('id', 'DESC')
            ->where('id','=','3')
            ->paginate(3);

        $tops = Topten::orderBy('id', 'DESC')->paginate();

        $article = Article::find($id);
        return view('concert.show', compact('article','tops','banners1','banners2','banners3'));
    }
}
