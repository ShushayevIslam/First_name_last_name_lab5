<?php

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
    return view('home');
});


//route
Route::get('/name/{id}', 'App\Http\Controllers\PostsController@show_name');

Route::get('/birth/{id}', 'App\Http\Controllers\PostsController@show_date');

Route::get('/age/{id}', 'App\Http\Controllers\PostsController@show_age');

