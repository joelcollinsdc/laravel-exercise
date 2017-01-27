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

Route::match(['post', 'put', 'patch'],
    'petition/{petition}/sign',
    'PetitionController@sign')->name('petition.sign');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin'], function () {
  Route::resource('petition', 'AdminPetitionController');
  Route::match(['post', 'put', 'patch'], 
    'petition/{petition}/publish', 
    'AdminPetitionController@publish')->name('petition.publish');
  Route::match(['post', 'put', 'patch'], 
    'petition/{petition}/unpublish', 
    'AdminPetitionController@unpublish')->name('petition.unpublish');
});