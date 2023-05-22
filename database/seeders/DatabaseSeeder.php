<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Stringable;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $categorie = ["programmation","magazine","mode","backend","frontend"];

        for($i=0;$i<sizeof($categorie);$i++){
            \App\Models\Categorie::factory( )->create([
                "libelle"=>$categorie[$i]
            ]);
        }
    \App\Models\User::factory(5)->create();
     \App\Models\Post::factory(20)->create();
     \App\Models\Commentaires::factory(5)->create();


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
