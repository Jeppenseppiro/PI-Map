<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PiData>
 */
class PiDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $location = ['Smelter', 'Refinery'];
        return [
            'location' => Arr::random($location),
            'value' => fake()->randomDigit()
        ];
    }
}
