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

Route::get('/', function(){
    return view('welcome');
});

/*流程配置相关路由组*/
Route::group([], function(){

	Route::get('/processEngineList', 'Web\ProcessEngineController@processEngineList');

	Route::get('/addProcessEngine/{id}', 'Web\ProcessEngineController@addProcessEngine');

	//添加流程
    Route::post('/doAddProcessEngine', 'Web\ProcessEngineController@doAddProcessEngine');
});
