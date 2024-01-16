<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Region;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Branch>
 */
class BranchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'region_id' => Region::query()->inRandomOrder()->value('id'),
            'city_id' => City::query()->inRandomOrder()->value('id'),
            'address' => fake()->address(),
            'phone' => fake()->phoneNumber(),
        ];
    }
}
