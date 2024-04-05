<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{ 
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $companyName = fake()->company();
        $companySocialMedia = Str::snake(strtolower($companyName)) . rand(1,99);

        return [
            'user_id' => User::all()->random()->id,
            'company_name' => strtolower($companyName),
            'address1' => fake()->streetAddress(),
            'city' => fake()->city(),
            'country' => 'UK',
            'postal_code' => fake()->postcode(),
            'facebook' =>  'https::/facebook.com/' . $companySocialMedia,
            'instagram' => 'https::/instagram.com/' . $companySocialMedia,
            'x' => 'https::/x.com/' . $companySocialMedia,
            'linkedin' => 'https::/linkedin.com/' . $companySocialMedia,

        ];
    }
}
