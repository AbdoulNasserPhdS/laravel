<?php

namespace Modules\Blog\Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Modules\Blog\Entities\Post;
use Modules\Blog\Entities\Category;
use Illuminate\Database\Eloquent\Model;

class BlogDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(CategoryTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);

        $categories=Category::all();

        $admin=User::where('name','admin')->first();
        $auteur=User::where('name','auteur')->first();

        //appel de factory de post

        //creation 5 posts pour l'admin
        Post::factory(5)->create([

            'user_id'=>$admin->id,
            'category_id'=>($categories->random(1)->first())->id

        ]);

        //creation 3 posts pour l'auteur
        Post::factory(3)->create([
            'user_id'=>$auteur->id,
            'category_id'=>($categories->random(1)->first())->id

        ]);



        // $this->call("OthersTableSeeder");
    }
}
