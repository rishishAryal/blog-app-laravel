<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('posts');
});

Route::get('posts/{post}',function($slug){  //posts/{post} is a route wildcards
    return view('post',[
   'post'=> Post::find($slug)
    ]);
        })->where('post','[A-z_\-]+'); // constraints for the route wildcards (rejected if letters other than a-z A-Z , -,_ is found )
