<?php

namespace Database\Seeders;

use App\Models\Provider;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $csvFile = fopen(base_path("database/data/labelle-providers.csv"), "r");
        $firstline = true;

        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Provider::create([
                    'company_id' => 1,
                    'first_name' => $data[0],
                    'last_name' => $data[1],
                    'mobile_number' => $data[2],
                    'email' => $data[3],
                    'status' => $data[4],
                    'appointments' => $data[5],
                    'user_permission' => $data[6],
                    'start_date' => date('Y-m-d H:i:s', strtotime($data[7])),
                    'end_date' => date('Y-m-d H:i:s', strtotime($data[8])),
                    'notes' => $data[9],
                    'service_commission' => $data[10],
                    'product_commission' => $data[11],
                    'voucher_commission' => $data[12],
                ]);
            }

            $firstline = false;
        }

        fclose($csvFile);


        // $companies = DB::table('companies')->get();

        // foreach($companies as $company)
        // {
        //     $companyId = $company->id;
        //     $count = rand(1,5);

        //     Provider::factory()
        //         ->count($count)
        //         ->create(['company_id' => $companyId]);
        // }
    }
}
