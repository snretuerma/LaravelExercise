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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/welcome', 'HomeController@index');

Route::get('/home', ['as'=>'showProduct','uses'=>'ProductController@getProduct']);
Route::post('/home',['as'=>'addProduct','uses'=>'ProductController@addProduct']);
Route::delete('/home',['as'=>'deleteProduct','uses'=>'ProductController@deleteProduct']);
