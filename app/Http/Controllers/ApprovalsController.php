<?php

namespace Insonico\Http\Controllers;
use Insonico\Article;
use Illuminate\Http\Request;

class ApprovalsController extends Controller
{
    public function index()
    {
        $approvals=Article::orderBy('id','DESC')->where('approve','No Aprobado')->paginate(25);

        return view('approvals.index',compact('approvals'));
    }

    public function show($id)
    {
        $approval = Article::find($id);
        return view('approvals.show', compact('approval'));
    }

//    public function update(ArticleRequest $request, $id)
//    {
//        $article = Article::find($id);
//
//        $article ->head         = $request    ->head;
//        $article ->path         = $request    ->path;
//        $article ->description  = $request    ->description;
//        $article ->body         = $request    ->body;
//        $article->video         =$request     ->video;
//
//        $article ->head_2       = $request    ->head_2;
//        $article ->path_2       = $request    ->path_2;
//        $article ->description_2 = $request   ->description_2;
//        $article ->body_2       = $request    ->body_2;
//        $article ->video_2      = $request    ->video_2;
//
//        $article ->autor        = Auth::user()->name.' '.Auth::user()->last_name;
//        $article ->category     = $request ->category;
//        $article ->approve      = 'No Aprobado';
//
//
//
//        $article ->save();
//
//        return redirect()-> route('articles.index')
//            ->with('info','El artículo fue actualizado correctamente');
//
//    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }
}
