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

Route::view('/', 'home')->name('home');
Route::view('/blog', 'blog')->name('blog');
Route::view('/about', 'about')->name('about');
Route::view('/login', 'login')->name('login');
Route::view('/contact', 'contact')->name('contact');
Route::view('/tourismpage', 'tourismpage')->name('tourismpage');