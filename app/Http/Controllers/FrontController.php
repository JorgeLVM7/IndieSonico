<?php

namespace Insonico\Http\Controllers;
use Insonico\Article;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {

//        $articles = Article::orderBy('id', 'DESC')->paginate();

        $articles = Article::orderBy('id', 'DESC')->paginate();

        return view('index',compact('articles'));
    }
}
