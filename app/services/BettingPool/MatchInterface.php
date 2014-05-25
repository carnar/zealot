<?php namespace BettingPool;

interface MatchInterface {

	/**
	 * Set Teams score
	 * @param array $scores Teams score
	 * @return boolean
	 */
	public function setScore(array $scores);

	/**
	 * Assign teams to match
	 * @param integer $teamAId Team A ID
	 * @param integer $teamBId Team B ID
	 */
	public function setTeams($teamAId, $teamBId);

	/**
	 * Get Teams Score
	 * @param Model $model Model in evaluation
	 * @return stdClass Object with scoreA and scoreB attributes 
	 */
	//public function getScore(Model $model);

}