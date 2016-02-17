<?php 

use Illuminate\Database\Seeder;
use App\Article;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\User;


class ArticlesTableSeeder extends Seeder {
	
	public function run()
	{

		$faker = Faker::create();

		$user_ids = User::lists('id');

		foreach(range(1,10) as $index)
		{
			Article::create([
				'title' 		=> $faker->sentence,
				'body' 			=> $faker->paragraph(30),
				'excerpt' 		=> $faker->paragraph,
				'user_id'		=> $faker->randomElement($user_ids->toArray()),
			]);
		}
	}

}