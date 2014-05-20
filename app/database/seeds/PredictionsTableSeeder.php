<?php

class sTableSeeder extends Seeder {

	public function run()
	{
		$data = [
			[
				'' => '',
			],
		];

		foreach($data as $row)
		{
			::create($row);
		}
	}

}