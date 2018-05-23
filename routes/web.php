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



Route::resource('/videos', 'VideosController');
Route::get('/videos', 'VideosController@index');

Route::get('/video', 'VideosController@index');

Route::get('/categories', 'CategoriesController@index');

Route::get('/genres', 'GenresController@index');

Route::resource('/channels', 'ChannelsController');

Route::get('/video', 'VideosController@index');

Route::get('/categories', 'CategoriesController@index');

Route::get('/genres', 'GenresController@index');

Route::resource('/channels', 'ChannelsController');
Route::get('/channels', 'ChannelsController@index');

Route::get('/videos/create', 'VideosController@create');
Route::get('/videos/{video}/edit', 'VideosController@edit');

Route::get('/channels/create', 'ChannelsController@create');
Route::get('/channels/{channel}/edit', 'ChannelsController@edit');
Route::get('/channels/create', 'ChannelsController@create');
Route::get('/channels/{channel}/edit', 'ChannelsController@edit');