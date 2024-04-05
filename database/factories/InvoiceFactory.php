<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{   
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $amount = 0;
        $status = fake()->randomElement(['B', 'P', 'V']);
        $billedDate = fake()->dateTimeBetween('-1 years', 'now');
        $paidDate = ($status == 'P') ? fake()->dateTimeBetween($billedDate, 'now') : NULL;
        
        return [
            'user_id' => User::factory(),
            'amount' => $amount,
            'status' => $status,
            'billed_date' => $billedDate,
            'paid_date' => $paidDate,

        ];
    }
}
