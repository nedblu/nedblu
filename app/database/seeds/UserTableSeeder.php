<?php

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		$users = [
			[
				'username' => 'MdOS',
				'password' => Hash::make('morky')
			],
			[
				'username' => 'elena',
				'password' => Hash::make('elena1003')
			],
			[
				'username' => 'karen',
				'password' => Hash::make('ryu_2341')
			],
			[
				'username' => 'sandman',
				'password' => Hash::make('chelas')
			]
		];

		DB::table('users')->insert($users);

	}

}