<?php

namespace IndieSonico\Http\Controllers;
use Mail;
use Session;
use Redirect;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        return view('contact.index');
    }
    public function store(Request $request)
    {
        Mail::send('contact.emails', $request->all(), function ($msj){
            $msj ->subject ('Correo de contacto');
            $msj ->to('jorgito11@gmail.com');

        });

        return redirect()-> route('contact.index')
            ->with('info','El correo enviado correctamente');
    }
}
