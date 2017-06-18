<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('article')->insert([
			'article_id' => 'Hello World',
			'article_title' => 'conglaturations!! Have a Good Night!!'
		]);
    }
}
