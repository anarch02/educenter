<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions = require database_path('factories/tests/regions.php');
        $cities = require database_path('factories/tests/cities.php');

        foreach ($regions as $region) {
            \App\Models\Region::create($region);
        }

        foreach ($cities as $city) {
            \App\Models\City::create($city);
        }
    }
}
