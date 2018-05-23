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

Route::get('/', function () {
    return view('welcome');
});






Route::get('/genres', 'GenresController@index');

Route::resource('/categories', 'CategoriesController');
Route::get('/categories', 'CategoriesController@index');
Route::get('/categories/create', 'CategoriesController@create');
Route::get('/categories/{category}/edit', 'CategoriesController@edit');
Route::get('/categories/{category}', 'CategoriesController@show');


Route::resource('/videos', 'VideosController');
Route::get('/videos', 'VideosController@index');
Route::get('/videos/create', 'VideosController@create');
Route::get('/videos/{video}/edit', 'VideosController@edit');

Route::resource('/channels', 'ChannelsController');
Route::get('/channels', 'ChannelsController@index');
Route::get('/channels/create', 'ChannelsController@create');
Route::get('/channels/{channel}/edit', 'ChannelsController@edit');
Route::get('/channels/{channel}', 'ChannelsController@show');
