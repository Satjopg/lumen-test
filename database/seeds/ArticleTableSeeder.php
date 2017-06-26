<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');
        
		for($i=0; $i<10; $i++)
		{
			DB::table('article')->insert([
				'article_id'=>$faker->numberBetween(100000, 1000000),
				'article_title'=>$faker->sentence($nbWords = 3),
			]);
		}
/*
		DB::table('article')->insert([
			'article_id' => 'Hello World',
			'article_title' => 'conglaturations!! Have a Good Night!!'
		]);
*/
    }
}
