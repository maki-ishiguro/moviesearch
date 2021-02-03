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

Route::group(['prefix' => 'admin'], function () {
    Route::get('movie/create','Admin\MovieController@add');
    Route::post('movie/create', 'Admin\MovieController@create');
    Route::get('movie/edit','Admin\MovieController@edit');
    Route::post('movie/edit', 'Admin\MovieController@update');
    Route::get('movie/delete', 'Admin\MovieController@delete');
    
    Route::get('search/create','Admin\SearchController@add');
    Route::post('search/create', 'Admin\SearchController@create');
    
});
