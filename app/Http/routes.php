<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

Route::get('/', 'IndexController@index');

//Route::resource('posters', 'PostersController');

Route::get('/poster/{posterId}', 'PostersController@index');

Route::get('/cart', 'PostersController@cart');

Route::get('/completeOrder', 'PostersController@completeOrder');

Route::get('/poster/addToCart/{posterId}', 'PostersController@addToCart');

Route::get('/poster/removeFromCart/{posterId}', 'PostersController@removeFromCart');

