<?php

use BettingPool\MatchHandler;

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		$scores = [
			'score_a' => 1,
			'score_b' => 3,
		];

		$match = new MatchHandler(Match::find(1));
		
		if($match->setScore($scores))
		{
			echo "Done";
		}
		else
		{
			echo "Error";
		}
		dd(' !!');
		
		return View::make('hello');
	}

}
