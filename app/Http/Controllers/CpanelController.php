<?php

namespace IndieSonico\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use IndieSonico\Http\Requests\LoginRequest;

class CpanelController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }




}
