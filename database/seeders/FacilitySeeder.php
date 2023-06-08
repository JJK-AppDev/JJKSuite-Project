<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Facility;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'Swimming Pool',
            'Fitness Center',
            'Restaurant',
            'Spa',
            'Conference Room',
        ];

        $informations = [
            'Outdoor pool with a sun deck and lounge chairs.',
            'Fully-equipped gym with cardio and strength training equipment.',
            'On-site restaurant serving a variety of delicious cuisines.',
            'Relaxing spa offering massages, facials, and body treatments.',
            'Spacious meeting room for business conferences and events.',
        ];

        for ($i = 0; $i < count($names); $i++) {
            Facility::create([
                'name' => $names[$i],
                'detail' => $informations[$i]
            ]);
        }


    }// end of run
}
