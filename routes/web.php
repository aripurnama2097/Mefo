<?php

use TCG\Voyager\Voyager;
use TCG\Voyager\Models\Post;
use Illuminate\Support\Facades\Route;


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

// Route::get('/home', function () {
//     return view(
//         'home',
//         ["title" => "Home"]
//     );
// });

route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Admin"
    ]);
});

route::get('/posts', function () {

    return view('posts', [
        "title" => "posts",
        "posts" =>post::all()// method a;;
    ]);
});


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

route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
