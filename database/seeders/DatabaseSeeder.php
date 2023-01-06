<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\board;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        board::factory()->count(50)->create();
    }
}
