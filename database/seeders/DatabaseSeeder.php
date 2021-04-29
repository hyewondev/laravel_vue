<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        $photographer = \App\Models\Photographer::factory()->create();

        for($i = 1; $i <= 6; $i++) {
            \App\Models\Photo::factory()->create([
                'photographer_id' => $photographer->id,
                'img' => 'img/landscape'. $i .'.jpeg'
            ]);
        }
    }
}
