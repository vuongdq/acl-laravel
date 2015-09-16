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
    return view('welcome');
});
get('/register','Auth\AuthController@getRegister');
post('/register','Auth\AuthController@postRegister');
get('/login','Auth\AuthController@getLogin');
post('/login','Auth\AuthController@postLogin');

get('/logout','Auth\AuthController@getLogout');

get('/test/{id}','TestController@test');

Route::group(['prefix' => 'admin','middleware' => 'role:admin'], function()
{
	Route::group(['prefix'=>'cate'], function()
	{
		get('add',['as'=>'admin.cates.getAdd','uses'=>'CateController@getAdd']);
		post('add',['as'=>'admin.cates.postAdd','uses'=>'CateController@postAdd']);
		get('list',['as'=>'admin.cates.list', 'uses'=> 'CateController@getList']);

		get('delete/{id}',['as'=>'admin.cates.delete','uses'=>'CateController@getDelete']);
	});

});