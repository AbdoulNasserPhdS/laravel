<?php

namespace Modules\Blog\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Blog\Entities\Role;
use Illuminate\Database\Eloquent\Model;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Role::truncate();

        
        // $this->call("OthersTableSeeder");
        Role::create(['name'=>'admin']);
        Role::create(['name'=>'auteur']);
        Role::create(['name'=>'utilisateur']);

        // $this->call("OthersTableSeeder");
    }
}
