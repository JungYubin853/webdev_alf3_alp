<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Court;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::factory(50)->create();

        Booking::factory(100)
        ->recycle(User::all())
        ->recycle(Court::all())
        ->create()->each(function ($booking) use ($users) {
            $startHour = rand(7, 21);
            $endHour = $startHour + 2 ;

            $booking->update([
                'user_id' => $users->random()->id,
                'start_time' => now()->setTime($startHour, 0, 0)->format('H:i:s'),
                'end_time' => now()->setTime($endHour, 0, 0)->format('H:i:s'),
            ]);
        });
    }
}
