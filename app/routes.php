<?php
Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');
Route::resource('sessions', 'SessionsController');

Route::get('profile', function()
{
	return 'Welcome your email is: ' . Auth::user()->email;
});
