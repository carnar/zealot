<?php

class Betting_poolsTableSeeder extends Seeder {

	public function run()
	{
		$pools = [
			[
				'name' => 'Brasil 2014'
			],
		];

		foreach($pools as $pool)
		{
			Betting_pool::create($pool);
		}
	}

}