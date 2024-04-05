<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvFile = fopen(base_path("database/data/labelle-customers.csv"), "r");
        $firstline = true;

        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {

                Customer::create([
                    'company_id' => 1,
                    'client_id' => $data[0],
                    'first_name' => $data[1],
                    'last_name' => $data[2],
                    'full_name' => $data[3],
                    'blocked' => $data[4],
                    'block_reason' => $data[5],
                    'appointments' => $data[6],
                    'no_shows' => $data[7],
                    'total_sales' => $data[8],
                    'outstanding' => $data[9],
                    'gender' => $data[10],
                    'mobile_number' => $data[11],
                    'telephone' => $data[12],
                    'email' => $data[13],
                    'accepts_marketing' => $data[14],
                    'accepts_sms_marketing' => $data[15],
                    'address' => $data[16],
                    'apartment_suite' => $data[17],
                    'area' => $data[18],
                    'city' => $data[19],
                    'state' => $data[20],
                    'post_code' => $data[21],
                    'date_of_birth' => $data[22],
                    'added' => $data[23],
                    'note' => $data[24],
                    'referral_source' => $data[25],
                ]);
            }

            $firstline = false;
        }

        fclose($csvFile);
    }
}
