<?php

class TournamentsTableSeeder extends Seeder {

	public function run()
	{
		$data = [
			[
				'betting_pool_id' => 1,
				'name' => 'Group Stage',
			],
		];

		foreach($data as $row)
		{
			Tournament::create($row);
		}
	}

}