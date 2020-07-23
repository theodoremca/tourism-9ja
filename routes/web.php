<?php

use Illuminate\Support\Facades\Auth;
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
<<<<<<< HEAD

Route::view('/', 'home')->name('home');
=======
Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
Route::get('/home', 'HomeController@index')->name('home');

    // Route::view('/', 'home')->name('home');
});

>>>>>>> dev
Route::view('/blog', 'blog')->name('blog');
Route::view('/about', 'about')->name('about');
Route::view('/login', 'login')->name('login');
Route::view('/contact', 'contact')->name('contact');
<<<<<<< HEAD
Route::view('/tourismpage', 'tourismpage')->name('tourismpage');
=======
Route::view('/tourismpage', 'tourismpage')->name('tourismpage');

Auth::routes();
>>>>>>> dev
