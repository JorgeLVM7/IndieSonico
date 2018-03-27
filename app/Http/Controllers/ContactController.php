<?php

namespace IndieSonico\Http\Controllers;
use IndieSonico\Advertising;

use Mail;
use Session;
use Redirect;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $banners1= Advertising::orderBy ('id', 'DESC')
            ->where('id','=','1')
            ->paginate(3);

        $banners2= Advertising::orderBy ('id', 'DESC')
            ->where('id','=','2')
            ->paginate(3);

        $banners3= Advertising::orderBy ('id', 'DESC')
            ->where('id','=','3')
            ->paginate(3);

        return view('contact.index',compact('articles','tops','banners1','banners2','banners3'));
    }
    public function store(Request $request)
    {
        Mail::send('contact.emails', $request->all(), function ($msj){
            $msj ->subject ('Correo de contacto');
            $msj ->to('hola@indiesonico.com');

        });

        return redirect()-> route('contact.index')
            ->with('info','El correo se ha enviado correctamente');
    }
}
