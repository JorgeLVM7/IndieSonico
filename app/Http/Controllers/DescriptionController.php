<?php

namespace IndieSonico\Http\Controllers;

use IndieSonico\Description;
use Illuminate\Http\Request;

class DescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $extras = Description::orderBy('id', 'DESC')
            ->paginate();
        return view('extras.index',compact('extras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('extras.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $extra = new Description();

        $extra ->description  = $request  ->description;


        $extra ->save();

        return redirect()-> route('extras.index')
            ->with('info','La descripción fue creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \IndieSonico\Description  $description
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $extra = Description::find($id);
        return view('extras.show',compact('extra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \IndieSonico\Description  $description
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $extra = Description::find($id);
        return view('extras.edit', compact('extra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \IndieSonico\Description  $description
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $extra = Description::find($id);

        $extra ->description  = $request  ->description;


        $extra ->save();

        return redirect()-> route('extras.index')
            ->with('info','La descripción fue actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \IndieSonico\Description  $description
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $extras = Description::find($id);
        $extras ->delete();
        return back()->with('info','La descripción fue eliminada correctamente');
    }
}
