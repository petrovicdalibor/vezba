<?php

namespace Database\Factories;

use App\Enums\YachtTypeEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Yacht>
 */
class YachtFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'type' => $this->faker->randomElement([YachtTypeEnum::SUPER_YACHT, YachtTypeEnum::CLASSIC]),
            'capacity' => $this->faker->numberBetween(1, 100),
            'hourly_rate' => $this->faker->numberBetween(100, 1000)
        ];
    }
}
