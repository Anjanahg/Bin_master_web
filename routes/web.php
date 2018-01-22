<?php

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
    return view('welcome');
});

Route::post('/signin',[
    'uses'=>'UserController@postSignIn',
    'as'=>'signin'
]);
Route::get('/order/{user}/{cat}', 'OrderController@save');
Route::get('/showorder/{user}', 'OrderController@show');


