<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\Article;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
		
		
		
		
		User::factory(10)->create();
		Article::factory(20)->create();
		
		/* User::create([
            'name' => 'Agus Budi',
            'email' => 'agus.budi@its.ac.id',
            'password' => bcrypt('123')
        ]);

        User::create([
            'name' => 'Fitrah Arie',
            'email' => 'fitrah@mhs.its.ac.id',
            'password' => bcrypt('123')
        ]); */

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Analisis Algoritma',
            'slug' => 'analisis-algoritma'
        ]);

        Category::create([
            'name' => 'Catatan Harian',
            'slug' => 'catatan-harian'
        ]);

    }
}
