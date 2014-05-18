<?php
Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');
Route::resource('sessions', 'SessionsController');

// Route::get('/', function()
// {
// 	return View::make('hello');
// });