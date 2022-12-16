<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Http;
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
Route::get('/welcome', function () {
    return 'hello dolly';
});

Route::get('/', function () {
    $name = request('name');
    return view('test', [
        'name' => $name
    ]);
});

Route::get('/posts/{post}', function ($post) {

    $posts = [
        'post-1' => 'Call this my first blog post',
        'post-2' => 'Call this my second blog post',
        'post-3' => 'Call this my third blog post'
        

    ];
return view  ('posts', [ 
    'post' => $posts[$post]
]);
});

*/

Route::get('/details/{post}', 'App\Http\Controllers\PostsController@show');
Route::get('/', 'App\Http\Controllers\PostsController@index');
Route::get('/posts', 'App\Http\Controllers\PostsController@index1');
Route::post('/posts ', 'App\Http\Controllers\PostsController@store');
Route::get('/posts/create', 'App\Http\Controllers\PostsController@create');
Route::get('/posts/edit/{post}', 'App\Http\Controllers\PostsController@edit');
Route::put('/posts/{post}', 'App\Http\Controllers\PostsController@update');



Route::get('/contact', function () {
    return view('contact');
});
Route::get('/details', function () {
    return view('details');
});
