<?php namespace BettingPool;

interface ScoreInterface {

	/**
	 * Set Teams score
	 * @param array $scores Teams score
	 * @return boolean
	 */
	public function setScore(array $scores);

	/**
	 * Get Teams Score
	 * @param Model $model Model in evaluation
	 * @return stdClass Object with scoreA and scoreB attributes 
	 */
	public function getScore(Model $model);

}