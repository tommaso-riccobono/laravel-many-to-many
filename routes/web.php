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



Auth::routes();

Route::get('/', "PostController@index")->name('posts.index');
Route::get('/post/{id}', "PostController@show")->name('posts.show');
Route::get('/post/create', "PostController@create")->name('posts.create');
Route::get('/post/edit', "PostController@create")->name('posts.edit');