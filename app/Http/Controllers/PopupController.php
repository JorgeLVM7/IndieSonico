<?php

namespace IndieSonico\Http\Controllers;
use IndieSonico\Popup;

use IndieSonico\Http\Requests\PopupRequest;

class PopupController extends Controller
{
    public function index()
    {
        $popups = Popup::orderBy('id', 'DESC')
            ->paginate();
        return view('popups.index',compact('popups'));

    }
    public function show($id)
    {
        $popup = Popup::find($id);
        return view('popups.show',compact('popup'));
    }

    public function store(PopupRequest $request)
    {
        $popup = new Popup;


        $popup ->title        = $request  ->title;
        $popup ->description  = $request  ->description;
        $popup ->path         = $request  ->path;
        $popup->video         =$request   ->video;
        $popup ->comment  = $request      ->comment;
        $popup ->category     = $request  ->category;
        $popup ->bonus  = $request        ->bonus;

        $popup ->save();

        return redirect()-> route('popups.index')
            ->with('info','El popup fue actualizado correctamente');

    }

    public function create()
    {
        return view('popups.create');
    }



    public function update(PopupRequest $request, $id)
    {
        $popup = Popup::find($id);

        $popup ->title        = $request  ->title;
        $popup ->description  = $request  ->description;
        $popup ->path         = $request  ->path;
        $popup->video         =$request   ->video;
        $popup ->comment  = $request      ->comment;
        $popup ->category     = $request  ->category;
        $popup ->bonus  = $request        ->bonus;

        $popup ->save();

        return redirect()-> route('popups.index')
            ->with('info','El popup fue actualizado correctamente');

    }

    public function destroy($id)
    {
        $popup = Popup::find($id);
        $popup ->delete();
        return back()->with('info','El popup fue eliminado correctamente');
    }

    public function edit($id)
    {
        $popup = Popup::find($id);
        return view('popups.edit', compact('popup'));
    }
}
