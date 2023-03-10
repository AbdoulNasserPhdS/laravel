<?php

namespace Modules\Blog\Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Modules\Blog\Entities\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        User::truncate();

        // $this->call("OthersTableSeeder");

        $admin=User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('password')
        ]);

        $auteur=User::create([
            'name'=>'auteur',
            'email'=>'auteur@gmail.com',
            'password'=>Hash::make('password')
        ]);

        $utilisateur=User::create([
            'name'=>'utilisateur',
            'email'=>'utilisateur@gmail.com',
            'password'=>Hash::make('password')
        ]);


        // ***Associer des roles aux utilisateurs creer***
        
        //recuperation des roles
        $adminRole=Role::where('name','admin')->first();
        $auteurRole=Role::where('name','auteur')->first();
        $utilisateurRole=Role::where('name','utilisateur')->first();

        //attache des roles

        $admin->roles()->attach($adminRole);
        $auteur->roles()->attach($auteurRole);
        $utilisateur->roles()->attach($utilisateurRole);
    }
}
