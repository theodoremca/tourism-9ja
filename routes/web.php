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
Route::get('/', function () {
    return view('pages.home');
});

Route::get('/footer', function () {
    return view('layouts.footer');
});



Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    //Comment
    Route::get('/comment', 'CommentController@index')->name('comment.index')->middleware('can:CanViewComment');
    Route::get('/comment/create', 'CommentController@create')->name('comment.create')->middleware('can:CanCreateComment');
    Route::post('/comment', 'CommentController@store')->name('comment.store')->middleware('can:CanCreateComment');
    Route::get('/comment/edit/{comment}', 'CommentController@edit')->name('comment.edit')->middleware('can:CanEditComment');
    Route::put('/comment-update/{comment}', 'CommentController@update')->name('comment.update')->middleware('can:CanEditComment');
    Route::delete('/comment/{comment}', 'CommentController@destroy')->name('comment.destroy')->middleware('can:CanDeactivateComment');

    //Image
    Route::get('/image', 'ImageController@index')->name('image.index')->middleware('can:CanViewImage');
    Route::get('/image/create', 'ImageController@create')->name('image.create')->middleware('can:CanCreateImage');
    Route::post('/image', 'ImageController@store')->name('image.store')->middleware('can:CanCreateImage');
    Route::get('/image/edit/{image}', 'ImageController@edit')->name('image.edit')->middleware('can:CanEditImage');
    Route::put('/image-update/{image}', 'ImageController@update')->name('image.update')->middleware('can:CanEditImage');
    Route::delete('/image/{image}', 'ImageController@destroy')->name('image.destroy')->middleware('can:CanDeactivateImage');

    //Profile
    Route::get('/profile', 'ProfileController@index')->name('profile.index')->middleware('can:CanViewProfile');
    Route::get('/profile/edit/{profile}', 'ProfileController@edit')->name('profile.edit')->middleware('can:CanEditProfile');
    Route::put('/profile-update/{profile}', 'ProfileController@update')->name('profile.update')->middleware('can:CanEditProfile');
    Route::delete('/profile/{profile}', 'ProfileController@destroy')->name('profile.destroy')->middleware('can:CanDeactivateProfile');

    //SubComment
    Route::get('/subcomment', 'SubCommentController@index')->name('subcomment.index')->middleware('can:CanViewSubComment');
    Route::get('/subcomment/create', 'SubCommentController@create')->name('subcomment.create')->middleware('can:CanCreateSubComment');
    Route::post('/subcomment', 'SubCommentController@store')->name('subcomment.store')->middleware('can:CanCreateSubComment');
    Route::get('/subcomment/edit/{subcomment}', 'SubCommentController@edit')->name('subcomment.edit')->middleware('can:CanEditSubComment');
    Route::put('/subcomment-update/{subcomment}', 'SubCommentController@update')->name('subcomment.update')->middleware('can:CanEditSubComment');
    Route::delete('/subcomment/{subcomment}', 'SubCommentController@destroy')->name('subcomment.destroy')->middleware('can:CanDeactivateSubComment');

    //TourismPlaces
    Route::get('/tourismplaces', 'TourismPlacesController@index')->name('tourismplaces.index')->middleware('can:CanViewTourismPlaces');
    Route::get('/tourismplaces/create', 'TourismPlacesController@create')->name('tourismplaces.create')->middleware('can:CanCreateTourismPlaces');
    Route::post('/tourismplaces', 'TourismPlacesController@store')->name('tourismplaces.store')->middleware('can:CanCreateTourismPlaces');
    Route::get('/tourismplaces/edit/{tourismplaces}', 'TourismPlacesController@edit')->name('tourismplaces.edit')->middleware('can:CanEditTourismPlaces');
    Route::put('/tourismplaces-update/{tourismplaces}', 'TourismPlacesController@update')->name('tourismplaces.update')->middleware('can:CanEditTourismPlaces');
    Route::delete('/tourismplaces/{tourismplaces}', 'TourismPlacesController@destroy')->name('tourismplaces.destroy')->middleware('can:CanDeactivateTourismPlaces');

});

Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/{id}', 'BlogController@show')->name('blog.show');
Route::view('/about', 'about')->name('about');
 Route::view('/sign-in', 'sign-in')->name('sign-in');
Route::view('/contact', 'contact')->name('contact');
Route::view('/home', 'pages.home')->name('home');
Route::view('/user', 'pages.UserProfile')->name('user');
Route::view('/contact', 'pages.ContactUs')->name('contact');
Route::view('/blog-page', 'pages.blogDetails')->name('blog-page');
// Route::view('/blog-page', 'pages.blogPage')->name('blog-page');




Auth::routes();
