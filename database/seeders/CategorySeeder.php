<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();
        Category::create([
            'name'=>'Sports',
            'slug'=>'sports'
        ]);

        Category::create([
            'name'=>'Entertainment',
            'slug'=>'entertainment'
        ]);

        Category::create([
            'name'=>'News',
            'slug'=>'news'
        ]);

        Category::create([
            'name'=>'Games',
            'slug'=>'games'
        ]);

        Category::create([
            'name'=>'Movies',
            'slug'=>'movies'
        ]);
    }
}
