<?php

namespace Database\Seeders;

use App\Models\ApsExecom;
use App\Models\CsExecom;
use Illuminate\Database\Seeder;
use App\Models\Execom;
use App\Models\MttsExecom;
use App\Models\SightExecom;
use App\Models\WieExecom;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\File;

class ExecomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Define the directory to save images
        $directory = public_path('uploads/images/execoms');

        // Ensure the directory exists
        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0755, true, true);
        }

        foreach (range(1, 10) as $index) {
            // Generate the image URL
            $gender = $faker->boolean() ? 'men/' : 'women/';
            $imageUrl = 'https://randomuser.me/api/portraits/' . $gender . $faker->numberBetween(1, 99) . '.jpg';

            // Generate a unique filename
            $fileName = uniqid() . '.jpg';

            // Download and store the image
            $imageContent = file_get_contents($imageUrl);
            File::put($directory . '/' . $fileName, $imageContent);

            // Save the record in the database
            Execom::create([
                'name' => $faker->name(),
                'title' => $faker->jobTitle(),
                'society' => $faker->randomElement(['Computer Society', 'Women in Engineering', 'APS', 'MTTS', null]),
                'image' => $fileName, // Store relative path
                'github' => $faker->boolean(70) ? 'https://github.com/' . $faker->userName() : null, // 70% chance of having a value
                'insta' => $faker->boolean(70) ? 'https://instagram.com/' . $faker->userName() : null,
                'linkedin' => $faker->boolean(70) ? 'https://linkedin.com/in/' . $faker->userName() : null,
            ]);
        }

        //     // cs execom

     
        $csdirectory = public_path('uploads/images/csexecoms');
        if (!File::exists($csdirectory)) {
            File::makeDirectory($csdirectory, 0755, true, true);
        }
        foreach (range(1, 10) as $index) {
            $gender = $faker->boolean() ? 'men/' : 'women/';
            $imageUrl = 'https://randomuser.me/api/portraits/' . $gender . $faker->numberBetween(1, 99) . '.jpg';
            $fileName = uniqid() . '.jpg';
            $imageContent = file_get_contents($imageUrl);
            File::put($csdirectory . '/' . $fileName, $imageContent);
            CsExecom::create([
                'name' => $faker->name(),
                'title' => $faker->jobTitle(),
                'society' => $faker->randomElement(['Computer Society', 'Women in Engineering', 'APS', 'MTTS', null]),
                'image' => $fileName, // Store relative path
                'github' => $faker->boolean(70) ? 'https://github.com/' . $faker->userName() : null, // 70% chance of having a value
                'insta' => $faker->boolean(70) ? 'https://instagram.com/' . $faker->userName() : null,
                'linkedin' => $faker->boolean(70) ? 'https://linkedin.com/in/' . $faker->userName() : null,
            ]);
        }

        //     // aps execom
            
        $apsdirectory = public_path('uploads/images/apsexecoms');
        if (!File::exists($apsdirectory)) {
            File::makeDirectory($apsdirectory, 0755, true, true);
        }
        foreach (range(1, 10) as $index) {
            $gender = $faker->boolean() ? 'men/' : 'women/';
            $imageUrl = 'https://randomuser.me/api/portraits/' . $gender . $faker->numberBetween(1, 99) . '.jpg';
            $fileName = uniqid() . '.jpg';
            $imageContent = file_get_contents($imageUrl);
            File::put($apsdirectory . '/' . $fileName, $imageContent);
            ApsExecom::create([
                'name' => $faker->name(),
                'title' => $faker->jobTitle(),
                'society' => $faker->randomElement(['Computer Society', 'Women in Engineering', 'APS', 'MTTS', null]),
                'image' => $fileName, // Store relative path
                'github' => $faker->boolean(70) ? 'https://github.com/' . $faker->userName() : null, // 70% chance of having a value
                'insta' => $faker->boolean(70) ? 'https://instagram.com/' . $faker->userName() : null,
                'linkedin' => $faker->boolean(70) ? 'https://linkedin.com/in/' . $faker->userName() : null,
            ]);
        }

        //     // MttsExecom
            
        $mttsdirectory = public_path('uploads/images/mttsexecoms');
        if (!File::exists($mttsdirectory)) {
            File::makeDirectory($mttsdirectory, 0755, true, true);
        }
        foreach (range(1, 10) as $index) {
            $gender = $faker->boolean() ? 'men/' : 'women/';
            $imageUrl = 'https://randomuser.me/api/portraits/' . $gender . $faker->numberBetween(1, 99) . '.jpg';
            $fileName = uniqid() . '.jpg';
            $imageContent = file_get_contents($imageUrl);
            File::put($mttsdirectory . '/' . $fileName, $imageContent);
            MttsExecom::create([
                'name' => $faker->name(),
                'title' => $faker->jobTitle(),
                'society' => $faker->randomElement(['Computer Society', 'Women in Engineering', 'APS', 'MTTS', null]),
                'image' => $fileName, // Store relative path
                'github' => $faker->boolean(70) ? 'https://github.com/' . $faker->userName() : null, // 70% chance of having a value
                'insta' => $faker->boolean(70) ? 'https://instagram.com/' . $faker->userName() : null,
                'linkedin' => $faker->boolean(70) ? 'https://linkedin.com/in/' . $faker->userName() : null,
            ]);
        }

        //     // SightExecom

            
        $sightdirectory = public_path('uploads/images/sightexecoms');
        if (!File::exists($sightdirectory)) {
            File::makeDirectory($sightdirectory, 0755, true, true);
        }
        foreach (range(1, 10) as $index) {
            $gender = $faker->boolean() ? 'men/' : 'women/';
            $imageUrl = 'https://randomuser.me/api/portraits/' . $gender . $faker->numberBetween(1, 99) . '.jpg';
            $fileName = uniqid() . '.jpg';
            $imageContent = file_get_contents($imageUrl);
            File::put($sightdirectory . '/' . $fileName, $imageContent);
            SightExecom::create([
                'name' => $faker->name(),
                'title' => $faker->jobTitle(),
                'society' => $faker->randomElement(['Computer Society', 'Women in Engineering', 'APS', 'MTTS', null]),
                'image' => $fileName, // Store relative path
                'github' => $faker->boolean(70) ? 'https://github.com/' . $faker->userName() : null, // 70% chance of having a value
                'insta' => $faker->boolean(70) ? 'https://instagram.com/' . $faker->userName() : null,
                'linkedin' => $faker->boolean(70) ? 'https://linkedin.com/in/' . $faker->userName() : null,
            ]);
        }

           
        // WieExecom
        $wiedirectory = public_path('uploads/images/wieexecoms');
        if (!File::exists($wiedirectory)) {
            File::makeDirectory($wiedirectory, 0755, true, true);
        }
        foreach (range(1, 10) as $index) {
            $gender = $faker->boolean() ? 'men/' : 'women/';
            $imageUrl = 'https://randomuser.me/api/portraits/' . $gender . $faker->numberBetween(1, 99) . '.jpg';
            $fileName = uniqid() . '.jpg';
            $imageContent = file_get_contents($imageUrl);
            File::put($wiedirectory . '/' . $fileName, $imageContent);
            WieExecom::create([
                'name' => $faker->name(),
                'title' => $faker->jobTitle(),
                'society' => $faker->randomElement(['Computer Society', 'Women in Engineering', 'APS', 'MTTS', null]),
                'image' => $fileName, // Store relative path
                'github' => $faker->boolean(70) ? 'https://github.com/' . $faker->userName() : null, // 70% chance of having a value
                'insta' => $faker->boolean(70) ? 'https://instagram.com/' . $faker->userName() : null,
                'linkedin' => $faker->boolean(70) ? 'https://linkedin.com/in/' . $faker->userName() : null,
            ]);
        }
    }
}
