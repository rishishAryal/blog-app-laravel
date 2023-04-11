<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    //

    public function store() {

        //validate the request

      $attributes =  request()->validate([
            'email'=>'required|',
            'password'=>'required'
        ]);

        if(auth()->attempt($attributes)){
            session()->regenerate();
          return redirect('/')->with('success','You are now logged in');
        }

        throw ValidationException::withMessages([
            'email'=>'your provided credentials could not be verified'
        ]);
    }

    public function create(){


        return view('sessions.create');


    }
    public function destroy(){

        auth()->logout();

        return redirect('/')->with('success','goodbye');
    }
}
