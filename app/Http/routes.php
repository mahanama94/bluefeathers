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

/**
 *         HOME
 */
Route::get('/',[
    'uses' => '\BlueFeathers\Http\Controllers\HomeController@index',
    'as' => 'home'
]);

/**
 *          ABOUT
 */

Route::get('/about',[
    'uses' => '\BlueFeathers\Http\Controllers\AboutController@index',
    'as' => 'about'
]);

/**
 *          TRAINERS
 */

Route::get('/trainers', [
    'uses' => '\BlueFeathers\Http\Controllers\TrainserController@index',
    'as' => 'trainers'
]);

/**
 *          CLASSES
 */

/**
 *          PRICING
 */