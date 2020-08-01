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




Route::get('/', 'HomeController@index')->name('home');

Route::get('/posts', 'Posts\PostsController@index')->name('posts');

Route::get('/multi-step', 'MultiStep\MultiStepController@index')->name('multi-step');

Auth::routes();
