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
 *          AUTH
 */

Route::get('/signup', [
    'uses'=> '\BlueFeathers\Http\Controllers\AuthController@getSignup',
    'as' => 'auth.signup'
]);

Route::post('/signup', [
    'uses'=> '\BlueFeathers\Http\Controllers\AuthController@postSignup',
]);

Route::get('/login', [
    'uses' => '\BlueFeathers\Http\Controllers\AuthController@getLogin',
    'as' => 'auth.login'
]);

Route::post('/login', [
    'uses' => '\BlueFeathers\Http\Controllers\AuthController@postLogin',
]);

Route::get('/logout', [
    'uses' => '\BlueFeathers\Http\Controllers\AuthController@getLogout',
    'as' => 'auth.logout'
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
    'uses' => '\BlueFeathers\Http\Controllers\TrainerController@trainerProfile',
    'as' => 'trainer.index'
]);

Route::get('/trainers/edit/{id}',[
    'uses' => '\BlueFeathers\Http\Controllers\TrainerController@getEdit',
    'as' => 'trainer.edit'
]);

Route::post('/trainers/edit/',[
    'uses' => '\BlueFeathers\Http\Controllers\TrainerController@postEdit',
    'as' => 'trainer.postEdit'
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