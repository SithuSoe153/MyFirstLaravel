<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Blog::factory()->count(10)->create();

        // User::factory()->count(5)->create();
        // $user1 = User::factory()->create(['name'=>'Sithu Soe']);
        // $user2 = User::factory()->create(['name'=>'Kyaw Gyi']);

        // Blog::factory(2)->create(['user_id' => $user1->id ]);
        // Blog::factory()->create(['user_id' => $user2->id ]);

        // Blog::factory()->count(5)->create();

        // $category = new Category();
        // $category->name = "Frontend";
        // $category->slug = "frontend";
        // $category->save();

        // $user1 = User::factory()->create ([]);
        // $user2 = User::factory()->create ([]);

        // $category2 = new Category();
        // $category2->name = "Backend";
        // $category2->slug = "backend";
        // $category2->save();

        // $blog = new Blog();
        // $blog->user_id = $user1->id;
        // $blog->title = "Laravel";
        // $blog->slug = "laravel";
        // $blog->body = "Lorem ipsum";
        // $blog->category_id = $category2->id;
        // $blog->save();

        // $blog2 = new Blog();
        // $blog2->user_id = $user2->id;
        // $blog2->title = "React";
        // $blog2->slug = "react";
        // $blog2->body = "Lorem ipsum";
        // $blog2->category_id = $category->id;
        // $blog2->save();

        // $blog3 = new Blog();
        // $blog3->user_id = $user1->id;
        // $blog3->title = "Vue";
        // $blog3->slug = "vue";
        // $blog3->body = "Lorem ipsum";
        // $blog3->category_id = $category->id;
        // $blog3->save();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


    }
}
