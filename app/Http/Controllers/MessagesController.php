<?php

namespace IndieSonico\Http\Controllers;

use Illuminate\Http\Request;
use IndieSonico\Subscribers;

class MessagesController extends Controller
{
    public function create()
    {
        $subscribers = Subscribers::all();

        return view('subscribers.create', compact('subscribers'));
    }
    
    
}
