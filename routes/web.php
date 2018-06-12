<?php



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
Route::get('/channels', 'ChannelsController@index', function()
{
    $query = Request::get('q');
    $channels = $query

    ? Post::where('name', 'LIKE', "%query%")->get()
    : Post::all();
    return View::make('channels.index')->withChannels($channels);

});
Route::get('/channels/create', 'ChannelsController@create');
Route::get('/channels/{channel}/edit', 'ChannelsController@edit');
Route::get('/channels/{channel}', 'ChannelsController@show');
Route::get('/channels/{channel}/destroy', 'ChannelsController@destroy');



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

Route::resource('/notificationtypes', 'NotificationtypesController');
Route::get('/notificationtypes', 'NotificationtypesController@index');
Route::get('/notificationtypes/create', 'NotificationtypesController@create');
Route::get('/notificationtypes/{notificationtype}', 'NotificationtypesController@show');
Route::get('/notificationtypes/{notificationtype}/edit', 'NotificationtypesController@edit');



