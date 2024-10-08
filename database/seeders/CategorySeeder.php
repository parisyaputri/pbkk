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
            'slug'=>'sports',
            'color' => 'red'
        ]);

        Category::create([
            'name'=>'Entertainment',
            'slug'=>'entertainment',
            'color' => 'pink'
        ]);

        Category::create([
            'name'=>'News',
            'slug'=>'news',
            'color' => 'blue'
        ]);

        Category::create([
            'name'=>'Games',
            'slug'=>'games',
            'color' => 'yelow'
        ]);

        Category::create([
            'name'=>'Movies',
            'slug'=>'movies',
            'color' => 'green'
        ]);
    }
}
