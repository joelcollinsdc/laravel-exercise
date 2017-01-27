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

Route::get('petition/{id}', 'PetitionController@show')->name('petition.public');

Route::match(['post', 'put', 'patch'], 'petition/{petition}',
    'PetitionController@sign')->name('petition.sign');

//Auth::routes();  not using user registration, so not using this for now...
Route::get('login', 'Auth\LoginController@showLoginForm');
Route::post('login', 'Auth\LoginController@login');
Route::match(['get', 'post'], 'logout', 'Auth\LoginController@logout');

Route::group(['prefix' => 'admin'], function () {
  Route::resource('petition', 'AdminPetitionController');
  Route::match(['post', 'put', 'patch'], 
    'petition/{petition}/publish', 
    'AdminPetitionController@publish')->name('petition.publish');
  Route::match(['post', 'put', 'patch'], 
    'petition/{petition}/unpublish', 
    'AdminPetitionController@unpublish')->name('petition.unpublish');
});