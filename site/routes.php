<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Phin the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'as' => 'home',
    'uses' => 'PageController@home'
]);

Route::get('/json', [
    'as' => 'json',
    'uses' => 'PageController@json'
]);

Route::get('/mail', [
    'as' => 'mail',
    'uses' => 'PageController@mail'
]);

Route::get('/redirect', [
    'as' => 'redirect',
    'uses' => 'PageController@redirect'
]);
