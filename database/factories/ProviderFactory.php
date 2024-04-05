<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Provider>
 */
class ProviderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_id' => 1,
            'first_name' => fake()->name(),
            'last_name' =>
            'mobile_number' =>
            'email' => fake()->unique()->safeEmail(),
            'status' => fake()->sentence(),
            'appintments' => fake()->unique()->phonenumber(),
            'user_permssion' =>
            'start_date' =>
            'end_date' =>
            'notes' =>
            'service_commission' =>
            'product_commission' =>
            'voucher_commission' =>

        ];
    }
}
