<?php

namespace IndieSonico\Http\Controllers;

use IndieSonico\Message;
use IndieSonico\Subscribers;
use Illuminate\Http\Request;
use IndieSonico\Notifications\MessageSent;

class MessagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $subscribers = Subscribers::all();

        return view('subscribers.create', compact('subscribers'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required',
            'recipient_id' => 'required|exists:subscribers,id',

        ]);



        $message = Message::create([
            'sender_id' => auth()->id(),

            'recipient_id' => $request->recipient_id,
            'body' => $request->body,
        ]);

//        $correos = implode(';',$_POST['recipient_id']);
//
//        $body = $_POST['body'];
//
//        $message = Message::create([
//        'sender_id' => auth()->id(),
//
//        'recipient_id' => $request = $correos,
//        'body' => $request = $body,
//    ]);

        $recipient = Subscribers::find($request->recipient_id);

        $recipient->notify(new MessageSent($message));

        return back()->with('flash', 'Tu mensaje fue enviado');
    }
    
}
