<?php namespace BettingPool;

use Illuminate\Database\Eloquent\Model;

/**
* Match Manager
*/
class MatchHandler implements MatchInterface {
	
	protected $match;

	public function __construct(Model $match)
	{
		$this->match = $match;
	}
	/**
	 * {@inheritdoc}
	 */
	public function setScore(array $scores)
	{
		$this->match->score_a = $scores['score_a'];
		$this->match->score_b = $scores['score_b'];
		return $this->match->save();
	}

	public function getScore()
	{
		# code...
	}

	public function setTeams($teamAId, $teamBId)
	{
		$this->match->team_a_id = $teamAId;
		$this->match->team_b_id = $teamBId;
		return $this->match->save();
	}

}