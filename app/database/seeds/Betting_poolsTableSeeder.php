<?php

class Betting_poolsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('betting_pools')->delete();
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