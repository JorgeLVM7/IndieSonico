<?php

namespace IndieSonico\Http\Controllers;

use IndieSonico\Http\Requests\SubscriberRequest;
use IndieSonico\Subscribers;
use Illuminate\Http\Request;

class SubscribersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubscriberRequest $request)
    {
        $subscriber = new Subscribers;

//        $messages = [
//
//            'name_complete.required'=> 'Falta el campo de Nombre',
//            'email.required'=> 'Falta el campo de Correo Electrónico',
//        ];

//        $this->validate($request, $messages,[
//
//            'name_complete'=> 'required',
//            'email' => 'required',
//
//        ]);

        $subscriber -> name_complete = $request-> name_complete;
        $subscriber -> email = $request-> email;

        $subscriber ->save();

        return back()->with ('info','Pronto recibirás noticias sobre nosotros! ');

    }

    /**
     * Display the specified resource.
     *
     * @param  \IndieSonico\Subscribers  $subscribers
     * @return \Illuminate\Http\Response
     */
    public function show(Subscribers $subscribers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \IndieSonico\Subscribers  $subscribers
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscribers $subscribers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \IndieSonico\Subscribers  $subscribers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscribers $subscribers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \IndieSonico\Subscribers  $subscribers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscribers $subscribers)
    {
        //
    }
}
