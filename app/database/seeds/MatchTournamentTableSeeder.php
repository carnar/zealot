<?php

class MatchTournamentTableSeeder extends Seeder {

	public function run()
	{
		$tournaments = Tournament::all();
		foreach ($tournaments as $tournament) {
			if($tournament->id  == 1) 
			{
				$tournament->matches()->attach(range(1,48));
			} 
			elseif($tournament->id  == 2)
			{
				$tournament->matches()->attach(range(49,56));
			}
			elseif($tournament->id  == 3)
			{
				$tournament->matches()->attach(range(57,60));
			}
			elseif($tournament->id  == 4)
			{
				$tournament->matches()->attach(range(61,62));
			}
			elseif($tournament->id  == 5)
			{
				$tournament->matches()->attach(range(63,64));
			} 
			else
			{
				$tournament->matches()->attach($tournament->id - 5);
			}
		}
	}

}