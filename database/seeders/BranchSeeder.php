<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $branches = require database_path('factories/tests/branches.php');

        foreach ($branches as $branch) {
            \App\Models\Branch::create($branch);
        }
    }
}
