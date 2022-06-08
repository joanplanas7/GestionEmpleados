<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class LoginControler extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function store(){
        if(!auth()-> attempt(request(['email', 'password']))){
            return back()->withErrors([
                'error' => 'The email or password is incorrect',
            ]);
        }else{
            return redirect('/home');
        }
    }
}
