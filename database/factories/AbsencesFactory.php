<?php

namespace Database\Factories;

use App\Models\DaysOfWeek;
use App\Models\Group;
use App\Models\Lesson;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Absences>
 */
class AbsencesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => Student::query()->inRandomOrder()->first()->id,
            'group_id' => Group::query()->inRandomOrder()->first()->id,
            'lesson_id' => Lesson::query()->inRandomOrder()->first()->id,
            'days_of_week_id' => DaysOfWeek::query()->inRandomOrder()->first()->id,
            'teacher_id' => Teacher::query()->inRandomOrder()->first()->id,
            'date' => $this->faker->date(),
            'status' => $this->faker->randomElement(['absent', 'late', 'early']),
        ];
    }
}
