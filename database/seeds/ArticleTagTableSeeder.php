<?php 

use Illuminate\Database\Seeder;
use App\Tag;
use App\Article;
use App\ArticleTag;
use Faker\Factory as Faker;


class ArticleTagTableSeeder extends Seeder {
	
	public function run()
	{

		$faker = Faker::create();

		$tag_ids = Tag::lists('id');
		$article_ids = Article::lists('id');

		foreach(range(1,30) as $index)
		{
			ArticleTag::create([
				'article_id' => $faker->randomElement($article_ids->toArray()),
				'tag_id'	 => $faker->randomElement($tag_ids->toArray()),
			]);
		}
	}

}