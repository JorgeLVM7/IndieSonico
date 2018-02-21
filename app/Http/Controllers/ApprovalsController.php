<?php

namespace Insonico\Http\Controllers;
use Insonico\Article;
use Illuminate\Http\Request;
use Insonico\Http\Requests\ArticleRequest;
use Auth;


class ApprovalsController extends Controller
{
    public function index()
    {
        $approvals=Article::orderBy('id','DESC')
            ->where('approve','No Aprobado')->paginate(25);

        $approvals_decline=Article::orderBy('id','DESC')
            ->where('approve','Rechazado')->paginate(25);

        $approvals_acepted=Article::orderBy('id','DESC')
            ->where('approve','Aprobado')->paginate(25);



        return view('approvals.index',
            compact('approvals',
                'approvals_decline',
                'approvals_acepted'));
    }

    public function show($id)
    {
        $approval = Article::find($id);
        return view('approvals.show', compact('approval'));
    }

    public function update(ArticleRequest $request, $id)
    {
        $article = Article::find($id);

        $article ->head         = $request    ->head;
        $article ->path         = $request    ->path;
        $article ->description  = $request    ->description;
        $article ->body         = $request    ->body;
        $article->video         =$request     ->video;

        $article ->head_2       = $request    ->head_2;
        $article ->path_2       = $request    ->path_2;
        $article ->description_2 = $request   ->description_2;
        $article ->body_2       = $request    ->body_2;
        $article ->video_2      = $request    ->video_2;

        $article ->autor        = Auth::user()->name.' '.Auth::user()->last_name;
        $article ->category     = $request ->category;
        $article ->approve      = $request ->approve;



        $article ->save();

        return redirect()-> route('approvals.index')
            ->with('info','El artículo fue actualizado correctamente');

    }

    public function edit($id)
    {
        $approval = Article::find($id);
        return view('approvals.edit', compact('approval'));
    }
}
