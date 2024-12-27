<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\Court;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookedCourt>
 */
class BookedCourtFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startHour = $this->faker->numberBetween(7, 21);
        $endHour = $this->faker->numberBetween($startHour + 2, 23); 

        return [
            'court_id' => Court::inRandomOrder()->first()->court_id,
            'booking_id' => Booking::inRandomOrder()->first()->booking_id,
            'start' => $startHour,
            'end' => $endHour,
        ];
    }
}
