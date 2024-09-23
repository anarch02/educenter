<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i <= 50; $i++) {
            \App\Models\ClassRoom::create([
                'name' => 'Аудитория ' . $i,
                'branch_id' => \App\Models\Branch::query()->inRandomOrder()->value('id'),
            ]);
        }
    }
}
