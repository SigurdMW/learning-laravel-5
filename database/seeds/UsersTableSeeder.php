<?php 

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory as Faker;


class UsersTableSeeder extends Seeder {
	
	public function run()
	{

		$faker = Faker::create();

		foreach(range(1,10) as $index)
		{
			User::create([
				'name' 		=> $faker->name,
				'username'	=> $faker->userName,
				'email' 	=> $faker->email,
				'password' 	=> Hash::make($faker->word),
			]);
		}
	}

}