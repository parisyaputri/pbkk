<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Category::create([
        //     'name'=> 'Framework Based Programming',
        //     'slug'=> 'Framework Based Programming',
        // ]);

        // Post::create([
        //     'title'=>'Framework-Based Programming: A Path to Efficiency and Standardization',
        //     'author_id'=> 1,
        //     'category_id'=>1,
        //     'slug'=>'article-1',
        //     'body'=> 'Framework-based programming is a method of software development that relies on using established frameworks to build applications. A framework is a collection of pre-written code, libraries, and conventions designed to simplify development by providing a foundation for building software efficiently. It typically includes tools, components, and best practices for common tasks, which developers can use to accelerate the creation of complex systems.'
        // ]);

        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(100)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }
}
