<?php

namespace Insonico\Http\Controllers;

use Illuminate\Http\Request;
use Insonico\User;
use Insonico\Http\Requests\UserRequest;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->paginate();
        return view('users.index',compact('users'));
    }
    public function show($id)
    {
        $users = User::find($id);
        return view('users.show', compact('users'));
    }

    public function store(UserRequest $request)
    {
        $user = new User;

        $user ->user = $request ->user;
        $user ->name = $request ->name;
        $user ->last_name = $request ->last_name;
        $user ->level = $request -> level;
        $user ->email = $request -> email;
        $user ->password = $request ->password;


        $user ->save();

        return redirect()-> route('users.index')
            ->with('info','El Usuarios fue guardado correctamente');

    }

    public function create()
    {
        return view('auth.register');
    }



    public function update(UserRequest $request, $id)
    {
        $user = User::find($id);

        $user ->user = $request ->user;
        $user ->name = $request ->name;
        $user ->last_name = $request ->last_name;
        $user ->level = $request -> level;
        $user ->email = $request -> email;
        //$user ->password = $request ->password;



        $user ->save();

        return redirect()-> route('users.index')
            ->with('info','El usuario fue actualizado correctamente');

    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return back()->with('info','El usuario fue eliminado correctamente');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }
}
