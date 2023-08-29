<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// use App\Models\Ttt72News;
use Database\Seeders\Ttt72NewsSeeder;
use Database\Seeders\PhotoCupsSeeder;

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
        // Ttt72News::factory(10)->create();
        $this->call([
            Ttt72NewsSeeder::class,
            PhotoCupsSeeder::class,
            // PostsTableSeeder::class,
            // CommentsTableSeeder::class,
        ]);
    }
}
