<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::create([
        //     'name' => 'Irma',
        //     'email' => 'irma@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Sasa',
        //     'email' => 'sasa@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla iste omnis, blanditiis veniam excepturi vero sunt commodi doloribus error atque.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla iste omnis, blanditiis veniam excepturi vero sunt commodi doloribus error atque.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla iste omnis, blanditiis veniam excepturi vero sunt commodi doloribus error atque.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla iste omnis, blanditiis veniam excepturi vero sunt commodi doloribus error atque.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
