<?php namespace BettingPool;

use Illuminate\Database\Eloquent\Model;

/**
* Match Manager
*/
class MatchHandler {
	
	protected $match;

	public function __construct(Model $match)
	{
		$this->match = $match;
	}
	
	public function setScore(array $scores)
	{
		$this->match->score_a = $scores['score_a'];
		$this->match->score_b = $scores['score_b'];
		return $this->match->save();
	}

	public function setTeams(array $teams)
	{
		# code...
	}

}