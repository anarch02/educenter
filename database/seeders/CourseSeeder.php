<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'subject_id' => 1,
                'name' => 'Арифметика',
                'description' => 'Описание курса арифметики',
            ],
            [
                'subject_id' => 1,
                'name' => 'Школьная математика',
                'description' => 'Описание курса школьной математики',
            ],
            [
                'subject_id' => 1,
                'name' => 'Высшая математика',
                'description' => 'Описание курса высшой математики',
            ],
            [
                'subject_id' => 2,
                'name' => 'Beginner English',
                'description' => 'Description of beginner English course',
            ],
            [
                'subject_id' => 2,
                'name' => 'Intermediate English',
                'description' => 'Description of intermediate English course',
            ],
            [
                'subject_id' => 2,
                'name' => 'Advanced English',
                'description' => 'Description of advanced English course',
            ],
            [
                'subject_id' => 2,
                'name' => 'Intermediate English',
                'description' => 'Description of intermediate English course',
            ],
        ];

        foreach ($courses as $course) {
            \App\Models\Course::factory()->create($course);
        }
    }
}
