<?php

class TournamentsTableSeeder extends Seeder {

	public function run()
	{
		$data = [
			[
				'betting_pool_id' => 1,
				'name' => 'Round Groups',
				'multi' => true,
			],
			[
				'betting_pool_id' => 1,
				'name' => 'Round 16',
				'multi' => true,
			],
[
				'betting_pool_id' => 1,
				'name' => 'Round 8',
				'multi' => true,
			],
[
				'betting_pool_id' => 1,
				'name' => 'Round 4',
				'multi' => true,
			],
[
				'betting_pool_id' => 1,
				'name' => 'Finals',
				'multi' => true,
			],

		];

		foreach($data as $row) {
			Tournament::create($row);
		}

		foreach (range(1,64) as $match) {
			Tournament::create(['betting_pool_id' => 1, 'name' => 'Match '. $match]);
		}
	}

}