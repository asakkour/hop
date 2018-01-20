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


//Route::resource('contact'    , 'ContactController');

Route::get('contact', [
    'as' => 'contacts', 'uses' => 'ContactController@index'
]);
Route::get('contact/create', [
    'as' => 'create_contact', 'uses' => 'ContactController@create_contact'
]);
Route::post('contact/save', [
    'as' => 'store_contact', 'uses' => 'ContactController@store_contact'
]);
Route::get('contact/{id}', [
    'as' => 'show_contact', 'uses' => 'ContactController@show_contact'
]);
Route::get('contact/edit/{id}', [
    'as' => 'edit_contact', 'uses' => 'ContactController@edit_contact'
]);
Route::post('contact/update/{id}', [
    'as' => 'update_contact', 'uses' => 'ContactController@update_contact'
]);
Route::get('contact/destroy/{id}', [
    'as' => 'destroy_contact', 'uses' => 'ContactController@destroy_contact'
]);