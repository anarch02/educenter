<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Group>
 */
class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'start' => $this->faker->date(),
            'branch_id' => \App\Models\Branch::query()->inRandomOrder()->value('id'),
            'course_id' => \App\Models\Course::query()->inRandomOrder()->value('id'),
            'subject_id' => \App\Models\Subject::query()->inRandomOrder()->value('id'),
            'teacher_id' => \App\Models\Teacher::query()->inRandomOrder()->value('id'),
        ];
    }
}
