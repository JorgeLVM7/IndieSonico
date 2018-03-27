<?php

namespace IndieSonico\Http\Controllers;

use Illuminate\Http\Request;
use IndieSonico\Advertising;
use IndieSonico\Http\Requests\AdvertisingRequest;
use Auth;
class AdvertisingController extends Controller
{
    public function index()
    {
        $advers = Advertising::orderBy('id', 'DESC')->paginate(25);
        return view('advertising.index',compact('advers'));
    }

    public function show($id)
    {
        $adver = Advertising::find($id);
        return view('advertising.show', compact('adver'));
    }

    public function store(AdvertisingRequest $request)
    {
        $adver = new Advertising();

        $adver->head = $request->head;
        $adver->path = $request->path;


        $adver->save();

        return redirect()->route('advertising.index')
            ->with('info', 'El banner fue guardado correctamente');

    }

    public function create()
    {
        return view('advertising.create');
    }


    public function update(AdvertisingRequest $request, $id)
    {
        $adver = Advertising::find($id);

        $adver->head = $request->head;
        $adver->path = $request->path;

        $adver->save();

        return redirect()->route('advertising.index')
            ->with('info', 'El banner fue actualizado correctamente');

    }

    public function destroy($id)
    {
        $adver = Advertising::find($id);
        $adver ->delete();
        return back()->with('info', 'El banner fue eliminado correctamente');
    }

    public function edit($id)
    {
        $adver = Advertising::find($id);
        return view('advertising.edit', compact('adver'));
    }

}
