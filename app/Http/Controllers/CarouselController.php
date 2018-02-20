<?php

namespace Insonico\Http\Controllers;

use Illuminate\Http\Request;
use Insonico\Topten;
use Insonico\Http\Requests\ToptenRequest;



class CarouselController extends Controller
{
    public function index()
    {
        $tops = Topten::orderBy('id', 'DESC')->paginate();

        return view('carousel.index', compact('tops'));
    }

    public function show($id)
    {
        $top = Topten::find($id);
        return view('carousel.show', compact('top'));
    }

    public function store(ToptenRequest $request)
    {
        $top = new Topten();

        $top->head = $request->head;
        $top->path = $request->path;


        $top->save();

        return redirect()->route('carousel.index')
            ->with('info', 'El topten fue guardado correctamente');

    }

    public function create()
    {
        return view('carousel.create');
    }


    public function update(ToptenRequest $request, $id)
    {
        $top = Topten::find($id);

        $top->head = $request->head;
        $top->path = $request->path;

        $top->save();

        return redirect()->route('carousel.index')
            ->with('info', 'El artículo fue actualizado correctamente');

    }

    public function destroy($id)
    {
        $top = Topten::find($id);
        $top->delete();
        return back()->with('info', 'El artículo fue eliminado correctamente');
    }

    public function edit($id)
    {
        $top = Topten::find($id);
        return view('Toptens.edit', compact('top'));
    }
}