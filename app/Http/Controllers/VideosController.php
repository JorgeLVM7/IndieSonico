<?php

namespace IndieSonico\Http\Controllers;

use Illuminate\Http\Request;
use IndieSonico\Video;
use IndieSonico\Http\Requests\VideoRequest;



class VideosController extends Controller
{
    public function index()
    {
        $videos = Video::orderBy('id','DESC')->paginate();

        return view ('videos.index', compact('videos'));
    }

    public function show($id)
    {
        $video = Video::find($id);
        return view('videos.show',compact('video'));
    }

    public function store(VideoRequest $request)
    {
        $video = new Video;

        $video ->name         = $request    ->name;
        $video ->path         = $request    ->path;
        $video ->category     = $request    ->category;
        $video ->save();

        return redirect()-> route('videos.index')
            ->with('info','El video fue guardado correctamente');

    }

    public function create()
    {
        return view('videos.create');
    }



    public function update(VideoRequest $request, $id)
    {
        $video = Video::find($id);

        $video ->name         = $request    ->name;
        $video ->path         = $request    ->path;
        $video ->category     = $request    ->category;
        $video ->save();

        return redirect()-> route('videos.index')
            ->with('info','El video fue actualizado correctamente');

    }

    public function destroy($id)
    {
        $video = Video::find($id);
        $video ->delete();
        return back()->with('info','El video fue eliminado correctamente');
    }

    public function edit($id)
    {
        $video = Video::find($id);
        return view('videos.edit', compact('video'));
    }

}
