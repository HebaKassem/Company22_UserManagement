<?php
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/company', function (Request $request) {
    return $request->company();
});

//return view
Route::get('users', 'UserController@index');

//json obj
Route::get('getallusers', 'UserController@getAllusers');

//json obj passing parameters id
Route::post('users/getuserbyid', 'UserController@getuserbyid');

//json obj with passing parameters of db fields
Route::post('users/addnewuser', 'UserController@addnewuser');

//return msg passing parameters id
Route::post('users/deleteuser', 'UserController@deleteuser');

//return msg passing parameters id
Route::post('users/updatebyid','UserController@updatebyid');



//return view
Route::get('companies', 'CompanyController@index');

//json obj
Route::get('getallcompanies', 'CompanyController@getallcompanies');

//json obj passing parameters id
Route::post('companies/getcompanybyid', 'CompanyController@getcompanybyid');

//json obj with passing parameters of db fields
Route::post('companies/addnewcompany', 'CompanyController@addnewcompany');

//return msg passing parameters id
Route::post('companies/deletecompany', 'CompanyController@deletecompany');

//return msg passing parameters id
Route::post('companies/updatebyid','CompanyController@updatebyid');
