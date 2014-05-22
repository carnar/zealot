<?php

class MatchesTableSeeder extends Seeder {

	public function run()
	{
		$file = public_path() . '/matches.json';
		if ($matches = json_decode(file_get_contents($file)))
		{
			foreach ($matches as $match) {
				$data =[];
				$data['date_gt'] = $match->datetime;
				if(intval($match->number) < 49) {
					$data['team_a_id'] = Team::where('code', '=', $match->code_a)->firstOrFail()->id;
					$data['team_b_id'] = Team::where('code', '=', $match->code_b)->firstOrFail()->id;
				}
				Match::create($data);
			}
		}
	}

}