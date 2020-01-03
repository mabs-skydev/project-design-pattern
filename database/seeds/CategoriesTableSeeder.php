<?php

use App\Category;
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
        Category::create(['name' => 'Categorie 1']);
        Category::create(['name' => 'Categorie 2']);
        Category::create(['name' => 'Categorie 3']);
        Category::create(['name' => 'Categorie 4']);
    }
}
