<?php

// use TCG\Voyager\Voyager;
// use TCG\Voyager\Models\Post;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use JeroenNoten\LaravelAdminLte\AdminLte;
use App\Http\Controllers\RegisterController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view(
        'home',
        ["title" => "Home"]
    );
});

route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Admin"
    ]);
});

route::get('/posts', [PostController ::class, 'index']);// unutk manggil controller


route::get('/posts/{slug}',[PostController :: class, 'show']);


route::get('/blog', function () {

    $blog_posts = [
    "title"=>"Blog",
    "slug" =>"Blog-Tes",
    "body"=>"Laravel includes Eloquent, an object-relational mapper (ORM) that makes
     it enjoyable to interact with your database. When using Eloquent, each database table 
     has a corresponding  that is used to interact with that table. In addition to retrieving
      records from the database table, Eloquent models allow you to insert, update, and delete 
      records from the table as well
    "];
    return view('posts', [
        "title" => "posts",
        "posts"=> $blog_posts,
    ]);
});


//single post halaman
route::get('posts/{slug}', function ($slug){
    return view('post');
});

// AdminLte::routes();
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', function() {
    return view('home'); })->name('home')->middleware('auth');

Route::get('/login',[LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);

Route::post('/register', [RegisterController::class, 'store']);