<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DevSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            LocationSeeder::class,
            AdminSeeder::class,
            BranchSeeder::class,
            SubjectSeeder::class,
            ClassRoomSeeder::class,
            CourseSeeder::class,
        ]);
    }
}
