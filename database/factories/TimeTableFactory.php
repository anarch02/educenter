<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TimeTable>
 */
class TimeTableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'branch_id' => \App\Models\Branch::query()->inRandomOrder()->value('id'),
            'group_id' => \App\Models\Group::query()->inRandomOrder()->value('id'),
            'class_room_id' => \App\Models\ClassRoom::query()->inRandomOrder()->value('id'),
            'lesson_id' => \App\Models\Lesson::query()->inRandomOrder()->value('id'),
            'days_of_week_id' => \App\Models\DaysOfWeek::query()->inRandomOrder()->value('id'),
        ];
    }
}
