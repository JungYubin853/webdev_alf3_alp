<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ensure no duplicate settings exist
        Setting::truncate();

        // Define interval slot and price per hour
        $intervalSlot = '02:00:00'; // Interval between slots
        $pricePerHour = 75000; // Price per hour

        // Calculate the price for the interval slot
        $timeParts = explode(':', $intervalSlot);
        $hours = (int) $timeParts[0];
        $price = $pricePerHour * $hours;

        // Create a default setting
        Setting::create([
            'intervalSlot' => $intervalSlot,
            'open_time' => '07:00:00', // Opening time
            'close_time' => '23:00:00', // Closing time
            'price' => $price, // Calculated price
        ]);
    }
}
