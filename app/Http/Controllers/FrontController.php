<?php

namespace Insonico\Http\Controllers;
use Insonico\Article;
use Illuminate\Http\Request;
use Insonico\Topten;

class FrontController extends Controller
{
    public function index()
    {

       $tops = Topten::orderBy('id', 'DESC')->paginate();

        $articles = Article::orderBy('id', 'DESC')->paginate();

        return view('index',compact('articles','tops'));
    }
}
