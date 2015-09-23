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

get('/','HomeController@welcome');
get('/register','Auth\AuthController@getRegister');
post('/register','Auth\AuthController@postRegister');
get('/login','Auth\AuthController@getLogin');
post('/login','Auth\AuthController@postLogin');

get('/logout','Auth\AuthController@getLogout');

get('/test/{id}','TestController@test');

Route::group(['prefix' => 'admin','middleware' => 'role:admin'], function()
{
	get('/',['as'=>'admin.home','uses'=>'AdminController@home']);
	Route::group(['prefix'=>'cate'], function()
	{
		get('add',['as'=>'admin.cates.getAdd','uses'=>'CateController@getAdd']);
		get('list',['as'=>'admin.cates.list', 'uses'=> 'CateController@getList']);

		get('add/{id}',['as'=>'admin.cates.getAddType','uses'=>'CateController@getAddType']);
		post('add/{id}',['as'=>'admin.cates.postAddType','uses'=>'CateController@postAddType']);

		get('edit/{id}',['as'=>'admin.cates.edit','uses'=>'CateController@getEdit']);
		post('edit/{id}',['as'=>'admin.cates.edit','uses'=>'CateController@postEdit']);

		get('delete/{id}',['as'=>'admin.cates.delete','uses'=>'CateController@getDelete']);
	});
	Route::group(['prefix'=>'catetype'],function(){
		get('list',['as'=>'admin.catetype.getList','uses'=>'CatetypeController@getList']);
		get('add',['as'=>'admin.catetype.getAdd','uses'=>'CatetypeController@getAdd']);
		post('add',['as'=>'admin.catetype.postAdd','uses'=>'CatetypeController@postAdd']);
		get('edit/{id}',['as'=>'admin.catetype.getEdit','uses'=>'CatetypeController@getEdit']);
		post('edit/{id}',['as'=>'admin.catetype.postEdit','uses'=>'CatetypeController@postEdit']);
		get('delete/{id}',['as'=>'admin.catetype.getDelete','uses'=>'CatetypeController@getDelete']);
	});
    Route::group(['prefix'=>'article'],function(){
        get('article/add',['as'=>'admin.articles.getAdd','uses'=>'ArticleController@getAdd']);
        post('article/add',['as'=>'admin.articles.postAdd','uses'=>'ArticleController@postAdd']);
    });
});







