<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Storage::deleteDirectory('articles');
        Storage::deleteDirectory('categories');

        Storage::makeDirectory('articles');
        Storage::makeDirectory('categories');

        $this->call(UserSeeder::class);
       
        Category::factory(10)->create();
        Article::factory(20)->create();
        Comment::factory(20)->create();
    }
}
