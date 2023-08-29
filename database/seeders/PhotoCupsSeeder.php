<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Photo\Cup;

class PhotoCupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cup::factory()
        ->count(50)
        // ->hasPosts(1)
        ->create();
    }
}
