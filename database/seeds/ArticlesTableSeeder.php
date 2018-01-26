<?php

use Illuminate\Database\Seeder;
use Insonico\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Article::class, 80)->create();
    }
}
