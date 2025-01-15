<?php

namespace Database\Factories;

use App\Enums\ReservationStatusEnum;
use App\Models\Yacht;
use Illuminate\Database\Eloquent\Factories\Factory;
use function Symfony\Component\Translation\t;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'yacht_id' => Yacht::factory(),
            'user_name' => $this->faker->userName(),
            'reservation_date' => $this->faker->dateTimeBetween('now', '+1 years'),
            'duration_hours' => $this->faker->numberBetween(1, 24),
            'status' => $this->faker->randomElement([ReservationStatusEnum::PENDING, ReservationStatusEnum::CANCELLED, ReservationStatusEnum::CONFIRMED])
        ];
    }
}
