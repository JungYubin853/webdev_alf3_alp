<?php

namespace Database\Seeders;

use App\Models\BookedCourt;
use App\Models\Booking;
use App\Models\Court;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookedCourtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courts = Court::all();
        $bookings = Booking::all();

        foreach ($bookings as $booking) {
            // Hitung jumlah slot berdasarkan durasi start_time dan end_time
            $startTime = strtotime($booking->start_time);
            $endTime = strtotime($booking->end_time);
            $slotDuration = 2 * 3600; // 2 jam dalam detik
            $slots = ($endTime - $startTime) / $slotDuration; // Hitung jumlah slot

            // Iterasi untuk setiap slot
            for ($i = 0; $i < $slots; $i++) {
                $slotStart = date('H:i:s', $startTime + ($i * $slotDuration));
                $slotEnd = date('H:i:s', $startTime + (($i + 1) * $slotDuration));

                // Pilih court secara acak untuk slot ini
                $selectedCourt = $courts->random();

                // Masukkan data ke booked_courts
                BookedCourt::create([
                    'court_id' => $selectedCourt->id,
                    'booking_id' => $booking->id,
                    'start' => $slotStart,
                    'end' => $slotEnd,
                ]);
            }
        }
    }
}