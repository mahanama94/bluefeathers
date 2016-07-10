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

Route::get('/test',[
    'uses' => '\BlueFeathers\Http\Controllers\HomeController@test',
    'as' => 'test'
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
    'uses' => '\BlueFeathers\Http\Controllers\TrainerController@index',
    'as' => 'trainers'
]);

/**
 *          CLASSES
 */

Route::get('/classes', [
    'uses' => '\BlueFeathers\Http\Controllers\ClassController@index',
    'as' => 'classes'
]);

/**
 *          PRICING
 */

Route::get('/prices', [
        'uses' => '\BlueFeathers\Http\Controllers\PriceController@index',
        'as' => 'prices'
]);

/**
 *          CONTACT
 */

Route::get('/contact', [
    'uses' => '\BlueFeathers\Http\Controllers\ContactController@index',
    'as' => 'contact'
]);