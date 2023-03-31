<?php

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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
    return view('posts',
    [
        'posts'=> Post::all()
    ]);

});

// $document = YamlFrontMatter::parseFile(resource_path('posts/my-fourth-post.html'));
// dd(resource_path('posts/my-fourth-post.html'));
//dd($document);
//    /Users/rishisharyal/blog/resources/posts/my-fourth-post.html
//    "/Users/rishisharyal/blog/resources/posts/my-first-post.html"
//    return view('posts',
//    [
//        'posts'=> Post::all()
//    ]);


Route::get('posts/{post}',function($slug){  //posts/{post} is a route wildcards
    //dd($post);
    return view('post',[

   'post'=> Post::findOrFail($slug)
    ]);
        }); // constraints for the route wildcards (rejected if letters other than a-z A-Z , -,_ is found )
