<?php

namespace Insonico\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Insonico\Http\Requests\LoginRequest;

class CpanelController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }




}
