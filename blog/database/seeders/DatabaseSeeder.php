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
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //belum di migrate fresh untuk user_id
            User::create([
                'name' => 'Enjel Hanganti Putri Gultom',
                'email' => 'enjelhpg@gmail.com',
                'password' => bcrypt('12345')
            ]);

            User::create([
                'name' => 'Bang Dika',
                'email' => 'bangdika@gmail.com',
                'password' => bcrypt('54321')
            ]);

            Category::create([
                'name' => 'Web Programming',
                'slug' => 'web-programming'
            ]);

            Category::create([
                'name' => 'Web Design',
                'slug' => 'web-design'
            ]);

            Post::create([
                'title' => 'Judul Pertama',
                'slug' => 'judul-pertama',
                'excerpt' => 'lorem ipsum pertama',
                'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor, magnam repellendus dolorum sunt facere voluptates veniam voluptate magni harum quae totam ad cum eveniet, deleniti rerum porro voluptatum doloremque, doloribus molestias. Ex eum nobis error facere modi quisquam. Quae laudantium facere totam, aperiam excepturi non, provident consequatur assumenda saepe rerum culpa debitis dolor dolorem deleniti nostrum odit laborum ut esse ipsam autem. Quaerat est ad nulla minus ratione 
                rerum totam neque minima quo aliquid perferendis corrupti quidem repellendus, labore sequi consequuntur. Eaque neque sed 
                officia voluptatum veniam dignissimos ea est voluptatem! Rem ratione praesentium consequatur maiores nobis assumenda impedit 
                dolores!</p>',
                'category_id' => 1,
                'user_id' => 1
            ]);

            Post::create([
                'title' => 'Judul Kedua',
                'slug' => 'judul-kedua',
                'excerpt' => 'lorem ipsum kedua',
                'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor, magnam repellendus dolorum sunt facere voluptates veniam voluptate magni harum quae totam ad cum eveniet, deleniti rerum porro voluptatum doloremque, doloribus molestias. Ex eum nobis error facere modi quisquam. Quae laudantium facere totam, aperiam excepturi non, provident consequatur assumenda saepe rerum culpa debitis dolor dolorem deleniti nostrum odit laborum ut esse ipsam autem. Quaerat est ad nulla minus ratione 
                rerum totam neque minima quo aliquid perferendis corrupti quidem repellendus, labore sequi consequuntur. Eaque neque sed 
                officia voluptatum veniam dignissimos ea est voluptatem! Rem ratione praesentium consequatur maiores nobis assumenda impedit 
                dolores!</p>',
                'category_id' => 2,
                'user_id' => 1
            ]);

            Post::create([
                'title' => 'Judul Ketiga',
                'slug' => 'judul-ketiga',
                'excerpt' => 'lorem ipsum Ketiga',
                'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor, magnam repellendus dolorum sunt facere voluptates veniam voluptate magni harum quae totam ad cum eveniet, deleniti rerum porro voluptatum doloremque, doloribus molestias. Ex eum nobis error facere modi quisquam. Quae laudantium facere totam, aperiam excepturi non, provident consequatur assumenda saepe rerum culpa debitis dolor dolorem deleniti nostrum odit laborum ut esse ipsam autem. Quaerat est ad nulla minus ratione 
                rerum totam neque minima quo aliquid perferendis corrupti quidem repellendus, labore sequi consequuntur. Eaque neque sed 
                officia voluptatum veniam dignissimos ea est voluptatem! Rem ratione praesentium consequatur maiores nobis assumenda impedit 
                dolores!</p>',
                'category_id' => 1,
                'user_id' => 2
            ]);

            Post::create([
                'title' => 'Judul Keempat',
                'slug' => 'judul-keempat',
                'excerpt' => 'lorem ipsum keempat',
                'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor, magnam repellendus dolorum sunt facere voluptates veniam voluptate magni harum quae totam ad cum eveniet, deleniti rerum porro voluptatum doloremque, doloribus molestias. Ex eum nobis error facere modi quisquam. Quae laudantium facere totam, aperiam excepturi non, provident consequatur assumenda saepe rerum culpa debitis dolor dolorem deleniti nostrum odit laborum ut esse ipsam autem. Quaerat est ad nulla minus ratione 
                rerum totam neque minima quo aliquid perferendis corrupti quidem repellendus, labore sequi consequuntur. Eaque neque sed 
                officia voluptatum veniam dignissimos ea est voluptatem! Rem ratione praesentium consequatur maiores nobis assumenda impedit 
                dolores!</p>',
                'category_id' => 2,
                'user_id' => 2
            ]);
    }
}
