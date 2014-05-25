<?php 
/**
* Tournament Manager
*/
class TournamentHandler {
	
	protected $tournament;
	
	public function __construct(Model $tournament)
	{
		$this->tournament = $tournament;
	}

	public function setDefault()
	{
		$this->tournament->is_default = true;
	}
}