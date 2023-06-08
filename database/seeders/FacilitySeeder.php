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
            'Business Center',
            'Laundry Service',
            'Parking',
            '24/7 Front Desk',
            'Gift Shop',
            'Outdoor Terrace',
            'Room Service',
        ];

        $informations = [
            'Outdoor pool with a sun deck and lounge chairs.',
            'Fully-equipped gym with cardio and strength training equipment.',
            'On-site restaurant serving a variety of delicious cuisines.',
            'Relaxing spa offering massages, facials, and body treatments.',
            'Spacious meeting room for business conferences and events.',
            'Fully-equipped business center with printing and copying facilities.',
            'On-site laundry service for guests.',
            'Secure parking area for guests with easy access.',
            'Round-the-clock reception for guest assistance.',
            'On-site gift shop offering souvenirs and essential items.',
            'Relaxing outdoor terrace with seating and scenic views.',
            '24/7 room service for in-room dining experience.',
        ];


        for ($i = 0; $i < count($names); $i++) {
            Facility::create([
                'name' => $names[$i],
                'detail' => $informations[$i]
            ]);
        }


    }// end of run
}
