<?php

namespace IndieSonico\Http\Controllers;
use IndieSonico\Advertising;

use Mail;
use Session;
use Redirect;
use IndieSonico\Article;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ContactController extends Controller
{

    public function index()
    {
        $tops = Article::orderBy('id', 'DESC')
            ->where('approve','Aprobado')
            ->limit(5)
            ->paginate(5);

        $tops1 = Article::orderBy('id', 'DESC')
            ->where('approve','Aprobado')
            ->limit(2)
            ->paginate(2);

        return view('contact.index',compact('tops', 'tops1'));
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
