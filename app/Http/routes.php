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


Route::get('/home', 'HomeController@index')->name('welcome');

Route::get('/', function () {
    // return view('welcome');
    return view('home');
});

//前台公司路由
Route::get('company',[
	'middleware'=> ['admin', 'auth'],
	'as'=>'company.all',
	'uses'=>'CompanyController@index']);

// Route::get('company/add','CompanyController@add');
Route::get('company/{id}', ['as' => 'company.info', 'uese' => 'CompanyController@show']);
// Route::post('company/create','CompanyController@create');

// 认证路由...
Route::get('login', 'Auth\AuthController@getLogin')->name('login');
Route::post('login', 'Auth\AuthController@postLogin')->name('login.post');
Route::get('logout', 'Auth\AuthController@getLogout')->name('logout');

// 注册路由...
Route::get('register', 'Auth\AuthController@getRegister')->name('register');
Route::post('register', 'Auth\AuthController@postRegister')->name('register.post');

//后台路由
// Route::get('/admin','AdminController@index');
Route::group(['prefix'=>'admin',
		'namespace'  => 'Admin',
		'middleware' => ['admin', 'auth'],
		'is'         => 'administrator'],
	function(){
		Route::get('/','AdminController@index')->name('admin.index');
		Route::get('/company', ['as' => 'admin.company.index', 'uses' => 'CompanyController@index']);
		Route::get('/company/edit/{id}', ['as' => 'admin.company.edit', 'uses' => 'CompanyController@edit']);
		Route::post('/company/update/{id}', ['as' => 'admin.company.update', 'uses' => 'CompanyController@update']);
		Route::get('/company/destroy/{id}', ['as' => 'admin.company.destroy', 'uses' => 'CompanyController@destroy']);
		Route::get('/article','AdminController@index');
});