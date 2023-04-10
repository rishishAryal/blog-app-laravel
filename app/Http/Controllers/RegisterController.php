<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function create(){
        return view('register.create');
    }
    public function store(){


        // create a user

      $attributes =  request()->validate([
            'name'=>['required','max:255'],
            'username'=>['required','max:255','min:3','unique:users,username'],
            'email'=>['required','email','max:255','unique:users,email'],
            'password'=>['required','min:7','max:255'],
        ]);



        User::create($attributes);

        session()->flash('success','your account has been created');
        return redirect('/')->with('success', 'Your account has been created.');
    }
}
