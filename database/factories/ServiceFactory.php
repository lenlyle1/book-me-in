<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $prices = [5, 10, 15, 20, 25];

        return [
            'company_id' => 1,
            'service_name' => fake()->words(3),
            'retail_price' => fake()->randomdigit(),
            'duration' => fake()->word(),
            'extra_time' => fake()->word(),
            'tax' => fake()->word(),
            'description' => fake()->paragraph(),
            'category_name' => fake()->word(),
            'treatment_type' => fake()->word(),
            'resource' => fake()->word(),
            'online_booking' => fake()->word(),
            'available_for' => fake()->word(),
            'voucher_sales' => fake()->word(),
            'commissions' => fake()->word(),
            'service_id' => fake()->word(),
        ];
    }
}
