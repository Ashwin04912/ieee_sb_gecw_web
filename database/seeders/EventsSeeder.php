<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Faker\Factory as Faker;
use App\Models\Event;

class EventsSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Directory for storing event images
        $directory = public_path('uploads/images/events');

        // Ensure the directory exists
        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0755, true, true);
        }

        foreach (range(1, 10) as $index) {
            // Generate and store three images for each event
            $images = [];
            for ($i = 1; $i <= 3; $i++) {
                $imageUrl = 'https://picsum.photos/800/600'; // URL for a random image
                $fileName = uniqid() . ".jpg"; // Unique file name for each image

                // Download and store the image
                try {
                    $imageContent = file_get_contents($imageUrl);
                    File::put($directory . '/' . $fileName, $imageContent);
                    $images[] = $fileName;
                } catch (\Exception $e) {
                    echo "Failed to fetch image for event $index, image $i: " . $e->getMessage() . "\n";
                    $images[] = null; // Use null if image fetch fails
                }
            }

            // Save the record in the database
            Event::create([
                'title' => $faker->sentence(5),
                'image1' => $images[0] ?? null, // Store image1
                'image2' => $images[1] ?? null, // Store image2
                'image3' => $images[2] ?? null, // Store image3
                'description' => $faker->paragraph(22),
                'date' => $faker->dateTimeBetween('now', '+1 year'),
            ]);
        }
    }
}
