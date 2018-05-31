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






Route::resource('/genres', 'GenresController');
Route::get('/genres', 'GenresController@index');
Route::get('/genres/create', 'GenresController@create');
Route::get('/genres/{genre}/edit', 'GenresController@edit');
Route::get('/genres/{genre}', 'GenresController@show');

Route::resource('/categories', 'CategoriesController');
Route::get('/categories', 'CategoriesController@index');
Route::get('/categories/create', 'CategoriesController@create');
Route::get('/categories/{category}/edit', 'CategoriesController@edit');
Route::get('/categories/{category}', 'CategoriesController@show');

Route::resource('/videos', 'VideosController');
Route::get('/videos', 'VideosController@index');
Route::get('/videos/{video}', 'VideosController@show');
Route::get('/videos/create', 'VideosController@create');
Route::get('/videos/{video}/edit', 'VideosController@edit');

Route::resource('/channels', 'ChannelsController');
Route::get('/channels', 'ChannelsController@index');
Route::get('/channels/create', 'ChannelsController@create');
Route::get('/channels/{channel}/edit', 'ChannelsController@edit');
Route::get('/channels/{channel}', 'ChannelsController@show');

Route::resource('/notifications', 'NotificationsController');
Route::get('/notifications', 'NotificationsController@index');
Route::get('/notifications/create', 'NotificationsController@create');
Route::get('/notifications/{notification}', 'NotificationsController@show');
Route::get('/notifications/{notification}/edit', 'NotificationsController@edit');

Route::resource('/reactions', 'ReactionsController');
Route::get('/reactions', 'ReactionsController@index');
Route::get('/reactions/create', 'ReactionsController@create');
Route::get('/reactions/{reaction}', 'ReactionsController@show');
Route::get('/reactions/{reaction}/edit', 'ReactionsController@edit');