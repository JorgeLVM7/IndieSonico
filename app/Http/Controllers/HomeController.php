<?php

namespace Insonico\Http\Controllers;

use Illuminate\Http\Request;
use Insonico\Article;
use Insonico\Http\Requests\ArticleRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $articles = Article::orderBy('id', 'DESC')->paginate();
        return view('index',compact('articles'));
//        return view('home');
    }


}
