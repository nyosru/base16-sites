<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ttt72News;

class Ttt72NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ttt72News::factory()
        ->count(50)
        // ->hasPosts(1)
        ->create();
    }
}
