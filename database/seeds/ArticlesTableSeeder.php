<?php

use Illuminate\Database\Seeder;
use App\Models\Article;
use APP\Models\User;

class ArticlesTableSeeder extends Seeder
{
    public function run()
    {
    

        $articles = factory(Article::class, 50)->create()->each(function ($article) {
            
        });

        Article::insert($articles->toArray());
    }

}

