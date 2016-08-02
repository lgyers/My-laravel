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

Route::get('company',[
	'middleware'=>'acl:my-admin',
	'as'=>'users.all',
	'uses'=>'CompanyController@index']);

Route::get('company/add','CompanyController@add');
Route::get('company/{id}','CompanyController@show');
Route::post('company/create','CompanyController@create');
Route::get('role','CompanyController@role');
Route::get('add_role','CompanyController@add_role');

Route::get('/home', 'HomeController@index');

// 认证路由...
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

// 注册路由...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');

//admin
// Route::get('/admin','AdminController@index');

Route::group(['prefix'=>'admin',
		'namespace' => 'Admin',
		'middleware' => ['acl', 'acl'],
		'is' => 'administrator'],
	function(){
		Route::get('/','AdminController@index');
		Route::get('/company', ['as' => 'admin.company.index', 'uses' => 'CompanyController@index']);
		Route::get('/company/edit/{id}','CompanyController@edit');
		Route::post('/company/update/{id}', ['as' => 'admin.company.update', 'uses' => 'CompanyController@update']);
		Route::get('/company/destroy/{id}','CompanyController@destroy');
		Route::get('/article','AdminController@index');
});