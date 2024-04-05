<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()
            ->count(100)
            ->create()->each(function($user){
                $company = Company::factory()
                    ->create();
                $user->companies()->save($company);
        });


        //     // Create 10 records of customers
        // factory(App\Customer::class, 10)->create()->each(function ($customer) {
        //     // Seed the relation with one address
        //     $address = factory(App\CustomerAddress::class)->make();
        //     $customer->address()->save($address);

        //     // Seed the relation with 5 purchases
        //     $purchases = factory(App\CustomerPurchase::class, 5)->make();
        //     $customer->purchases()->saveMany($purchases);
        // });
    }
}
