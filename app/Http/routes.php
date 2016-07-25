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

Route::get('/trainers/new', [
    'uses' => '\BlueFeathers\Http\Controllers\TrainerController@addNew',
    'as' =>'trainers.new'
]);

Route::post('/trainers/new', [
    'uses' => '\BlueFeathers\Http\Controllers\TrainerController@postNew',
    'as' => 'trainers.new'
]);

Route::get('/trainers/{id}', [
    'uses' => '\BlueFeathers\Http\Controllers\TrainerController@trainerIndex',
    'as' => 'trainer.index'
]);

/**
 *          CLASSES
 */

Route::get('/classes', [
    'uses' => '\BlueFeathers\Http\Controllers\ClassController@index',
    'as' => 'classes'
]);

Route::get('/classes/new', [
   'uses' => '\BlueFeathers\Http\Controllers\ClassController@addNew',
    'as'=> 'classes.new'
]);

Route::post('/classes/new', [
    'uses' => '\BlueFeathers\Http\Controllers\ClassController@postNew',
    'as'=> 'classes.new'
]);

Route::get('/classes/{id}', [
    'uses' => '\BlueFeathers\Http\Controllers\ClassController@classIndex',
    'as'=> 'classes.index'
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