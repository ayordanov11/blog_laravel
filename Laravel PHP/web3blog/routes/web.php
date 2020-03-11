<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
Route::get('contact', 'PagesController@getContact');
Route::post('contact', 'PagesController@postContact');
Route::get('about', 'PagesController@getAbout');
Route::get('/', 'PagesController@getIndex');
Route::resource('posts', 'PostController');


//admin page
Route::group(['middleware' => 'isAdmin'], function(){
	Route::resource('admin', 'AdminController');	
});

Route::resource('categories', 'CategoryController', ['except' => ['create']]);
Route::resource('tags', 'TagController', ['except' => ['create']]);

//Excel
Route::get('/getExport', 'ExcelController@getExport');
Route::get('/getExportUsers', 'ExcelController@getExportUsers');

//comments
	Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);
	Route::get('comments/{id}/edit', ['uses' => 'CommentsController@edit', 'as' => 'comments.edit']);
	Route::put('comments/{id}', ['uses' => 'CommentsController@update', 'as' => 'comments.update']);
	Route::delete('comments/{id}', ['uses' => 'CommentsController@destroy', 'as' => 'comments.destroy']);
	Route::get('comments/{id}/delete', ['uses' => 'CommentsController@delete', 'as' => 'comments.delete']);

 Route::get('profile', 'UserController@profile');
 Route::post('profile', 'UserController@update_avatar');

// API
Route::group(['prefix' => 'api'], function () {
    Route::resource('landmark', 'LandmarkApiController');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//Linkedin login
Route::get('auth/linkedin', 'Auth\RegisterController@redirectToProviderLinkedin');
Route::get('callback/linkedin', 'Auth\RegisterController@handleProviderCallbackLinkedin');

//facebook login
Route::get('auth/facebook', 'Auth\RegisterController@redirectToProviderFacebook');
Route::get('auth/facebook/callback', 'Auth\RegisterController@handleProviderCallbackFacebook');

