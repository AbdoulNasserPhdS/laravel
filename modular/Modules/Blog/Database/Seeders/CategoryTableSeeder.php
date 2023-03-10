<?php

namespace Modules\Blog\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Blog\Entities\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        //Vider d'abord la table categorie
        Category::truncate();

        // $this->call("OthersTableSeeder");
        Category::create(['name'=>'Category 1']);
        Category::create(['name'=>'Category 2']);
        Category::create(['name'=>'Category 3']);

    }
}
