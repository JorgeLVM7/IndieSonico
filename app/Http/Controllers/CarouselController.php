<?php

namespace Insonico\Http\Controllers;

use Illuminate\Http\Request;
use Insonico\Article;


class CarouselController extends Controller
{
    public function carousel()
    {
        $articles = Article::orderBy('id');
        return view('carousel.carousel',compact('articles'));
    }
}
