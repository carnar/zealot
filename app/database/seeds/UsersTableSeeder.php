<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$data = [
			[
				'username' => 'carnar',
				'email' => 'cnarez@gmail.com',
				'password' => Hash::make('carnar'),
			],
		];

		foreach($data as $row)
		{
			User::create($row);
		}
	}

}