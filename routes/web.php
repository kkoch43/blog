<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now  create something great!
|
*/

Route::group(['middleware' => ['web']], function() {
    //Authentication Routes
    Route::get('auth/login', ['as' => 'login', 'uses' =>'Auth\LoginController@showLoginForm']);
    Route::post('auth/login', 'Auth\LoginController@login');
    Route::get('auth/logout', ['as' => 'logout', 'uses' =>'Auth\LoginController@logout']);

    //Registration Routes
    Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm');
    Route::post('auth/register', 'Auth\RegisterController@register');

    //Password Reset Routes
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');

   // categories
    Route::resource('categories', 'CategoryController', ['except' => ['create']]);

    //tags
    Route::resource('tags', 'TagController', ['except' => ['create']]);

    Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])
        ->where('slug', '[\w\d\-\_]+');

    Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
    Route::get('contact', 'PagesController@getContact');
    Route::post('contact', 'PagesController@postContact');


    Route::get('about', 'PagesController@getAbout');



    Route::get('home', ['as' => 'home', 'uses' => 'PagesController@getIndex']);

    Route::resource('posts', 'PostController');

    Route::post('save', 'PostController@store');


    Route::get('pix', 'PagesController@getPix');

    Route::get('pixcom', 'PagesController@getPixcom');

   // Comments
    Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store'] );

});
Route::get('comments/{id}/edit', ['uses' => 'CommentsController@edit', 'as' => 'comments.edit']);
Route::put('comments/{id}/', ['uses' => 'CommentsController@update', 'as' => 'comments.update']);
Route::delete('comments/{id}', ['uses' => 'CommentsController@destroy', 'as' => 'comments.destroy']);
Route::get('cmments/{id}/delete', ['uses' => 'COmmentsController@delete', 'as' => 'comments.delete']);
