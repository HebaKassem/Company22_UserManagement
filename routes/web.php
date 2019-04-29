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
Route::resource('users','UserController');
Route::resource('companies','CompanyController');
Route::resource('general','generalController');


Route::post('users/edit/{id}','UserController@update');
Route::post('companies/edit','CompanyController@update');
Route::get('general/user','generalController@serveUser');

Route::post('companies/logged','CompanyController@loginValidation');
Route::post('users/logged','UserController@loginValidation');

//Route::get('general/user','generalController@serveUser');



