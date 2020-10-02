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
|| Returning Views
| //Blade with Controller
| Route::get('test',[App\Http\Controllers\TestController::class, 'test'])->name('test');
| //View Only
| Route::view('/dummy', 'dummy');
| //Livewire
| Route::get('contact', \App\Http\Livewire\Contact\ContactForm::class)->name('contact');
*/


Auth::routes();
Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/posts',[App\Http\Controllers\Posts\PostsController::class, 'index'])->name('posts');

Route::get('/multi-step',[App\Http\Controllers\MultiStep\MultiStepController::class, 'index'])->name('multi-step');

Route::view('/msf', 'pages.msf.index')->name('msf');


