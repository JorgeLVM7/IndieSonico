<?php

namespace Insonico\Http\Controllers;
use Insonico\Article;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->paginate();
        return view('contact.index',compact('articles'));
    }
}
