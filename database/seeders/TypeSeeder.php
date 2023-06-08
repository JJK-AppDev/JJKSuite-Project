<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'Standard Room',
            'Superior Room',
            'Deluxe Room',
            'Junior Suite Room',
            'Suite Room',
            'Presidential Suite',
            'Single Room',
            'Twin Room',
            'Double Room',
            'Family Room/Triple Room',
            'Connecting Room',
            'Murphy Room',
            'Accessible Room/Disabled Room',
            'Smoking/Non Smoking Room',
            'Cabana Room',
        ];

        $informations = [
            'A basic room with essential amenities for a comfortable stay.',
            'A slightly upgraded room with additional features and amenities compared to a standard room.',
            'A spacious and well-appointed room with upscale amenities and luxurious furnishings.',
            'A larger room with a separate seating area and enhanced amenities for added comfort.',
            'A luxurious and expansive room with separate living and sleeping areas, ideal for extended stays or special occasions.',
            'The most luxurious and prestigious suite in the hotel, often featuring multiple bedrooms, a private dining area, and exclusive amenities.',
            'A room designed for single occupancy with a single bed and amenities suitable for one person.',
            'A room with two single beds, typically suitable for two guests.',
            'A room with a double-sized bed, typically suitable for two guests.',
            'A room designed to accommodate families or groups with additional beds or bedding arrangements to accommodate three or more guests.',
            'Two or more rooms with a connecting door, allowing guests to move freely between the rooms without exiting into the hallway.',
            'A room with a space-saving Murphy bed that can be folded into the wall when not in use, creating more space in the room.',
            'A room specifically designed and equipped to accommodate guests with disabilities, featuring accessible amenities and facilities.',
            'A room designated for guests who prefer smoking or a room where smoking is prohibited, ensuring a smoke-free environment.',
            'A room located by the poolside or beach area, offering direct access to outdoor recreational facilities and a private outdoor space.',
        ];

        for ($i = 0; $i < count($name); $i++) {
            Type::create([
                'name' => $name[$i],
                'information' => $information[$i]
            ]);
        }
    }
}
