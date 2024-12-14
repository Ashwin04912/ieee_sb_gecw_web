<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Insert 10 random gallery entries
        foreach (range(1, 100) as $index) {
            DB::table('gallery')->insert([
                'image' => $faker->image('public/uploads/images/gallery', 640, 480, null, false), // Generates random image in the specified folder
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
