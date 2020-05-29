<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            [
                'name'        => 'Catégorie 01',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit.',
            ],
            [
                'name'        => 'Catégorie 02',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit.',
            ],
            [
                'name'        => 'Catégorie 03',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit.',
            ],
            [
                'name'        => 'Catégorie 04',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit.',
            ],
        ];

    
        DB::table('categories')->insert($data);
    }
}
