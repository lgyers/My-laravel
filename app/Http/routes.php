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

Route::get('/', function () {
    // return view('welcome');
    return view('home');
});

Route::get('company','CompanyController@index');
Route::get('company/add','CompanyController@add');
Route::get('company/{id}','CompanyController@show');
Route::post('company/create','CompanyController@create');
