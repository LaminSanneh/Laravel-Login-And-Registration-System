<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SeedUsersTableTableSeeder extends Seeder {

	public function run()
	{
        DB::table('users')->truncate();

		$users = [
            [
                'first_name' => 'Emily',
                'last_name' => 'Thorn',
                'email' => 'emily.thorn@gmail.com',
                'password' => Hash::make('emilythorn')
            ],
            [
                'first_name' => 'Fred',
                'last_name' => 'Jackson',
                'email' => 'fred.jackson@gmail.com',
                'password' => Hash::make('fredjackson')
            ],
        ];

        foreach($users as $user){
            User::create($user);
        }
	}

}