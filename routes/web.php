<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Services\MailchimpNewsletter;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;
use MailchimpMarketing\ApiClient;
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

Route::post('newsletter', NewsletterController::class);



Route::get('/', [PostController::class,'index'] )->name('home');
Route::get('posts/{post:slug}',[PostController::class ,  'show']);

Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::get('register',[RegisterController::class,'create'])->middleware('guest');
Route::post('register',[RegisterController::class,'store']);

Route::get('login',[SessionsController::class,'create'])->middleware('guest');
Route::post('logout',[SessionsController::class,'destroy'])->middleware('auth');
Route::post('login',[SessionsController::class,'store'])->middleware('guest');

//admin section

Route::middleware('can:admin')->group(function () {
    Route::resource('admin/posts', AdminPostController::class)->except('show');
});
