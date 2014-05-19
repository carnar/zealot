<?php
Route::get('/', ['as' => 'home' ,function(){
	return View::make('hello');
}]);

Route::get('profile', function()
{
	return 'Welcome your email is: ' . Auth::user()->email;
})->before('auth');

Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');
Route::resource('sessions', 'SessionsController', ['only' => ['create', 'destroy', 'store']]);
