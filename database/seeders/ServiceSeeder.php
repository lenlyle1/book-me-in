<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $csvFile = fopen(base_path("database/data/labelle-services.csv"), "r");
        $firstline = true;

        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Service::create([
                    'company_id' => 1,
                    'service_name' => $data[0],
                    'retail_price' => $data[1],
                    'duration' => $data[2],
                    'extra_time' => $data[3],
                    'tax' => $data[4],
                    'description' => $data[5],
                    'category_name' => $data[6],
                    'treatment_type' => $data[7],
                    'resource' => $data[8],
                    'online_booking' => $data[9],
                    'available_for' => $data[10],
                    'voucher_sales' => $data[11],
                    'commissions' => $data[12],
                    'service_id' => $data[13],
                ]);
            }

            $firstline = false;
        }

        fclose($csvFile);


        // Service::factory()
        //         ->count(100)
        //         ->create();   


        // $companies = DB::table('companies')->get();

        // foreach($companies as $company)
        // {

        //     $companyId = $company->id;

        //     $count = rand(1,5);
        //     Service::factory()
        //         ->count($count)
        //         ->create(['company_id' => $companyId]);
        // }
    }
}
