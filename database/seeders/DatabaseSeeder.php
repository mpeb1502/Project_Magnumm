<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        User::create([
            'name' => 'Ikhsan Rachmat Alghifari',
            'username' => 'sans',
            'email' => '23ikhsanrachmat@gmail.com',
            'password' => bcrypt('ggwpisn23')
        ]);

        // User::create([
        //     'name' => 'Muhammad Rafi',
        //     'email' => 'mrafi60@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Bandung- Jawa Barat',
            'slug' => 'bandung-jawa Barat'
        ]);

        Category::create([
            'name' => 'Banten- Jawa Barat',
            'slug' => 'banten'
        ]);

        Category::create([
            'name' => 'Majalengka- Jawa Barat',
            'slug' => 'majalengka'
        ]);

        Post::factory(20)->create();

    }
}
