<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterControler extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(){

       $dades = $this -> validate( request(), [
            'name' => 'required',
            'email' => 'required | email',
            'password' => 'required | confirmed'
        ]);

        $user = User::create($dades);
        auth()->login($user);

        return redirect('/home');
    }
}
