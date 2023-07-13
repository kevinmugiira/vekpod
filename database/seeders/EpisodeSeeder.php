<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Episode::factory(40)->create();
    }
}
