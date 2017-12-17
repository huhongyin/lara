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

Route::get('/', 'Web\IndexController@index');

Route::group([], function(){

	Route::get('/upload', 'Web\IndexController@upload');

	Route::post('/doUpload', 'Web\IndexController@doUpload');

	Route::get('/mkThumbnail/{path}', 'Web\IndexController@mkThumbnail');

	Route::post('/deletePictureById', 'Web\IndexController@deletePictureById');

	Route::get('/getPhotoesByPage', 'Web\IndexController@getPhotoesByPage');

});
