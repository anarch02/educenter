<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Branch;
use App\Models\ClassRoom;
use App\Models\Group;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            LocationSeeder::class,
            AdminSeeder::class,
            BranchSeeder::class,
            SubjectSeeder::class,
            ClassRoomSeeder::class,
        ]);


        $days_of_week = require database_path('factories/tests/days_of_week.php');

        $lessons = require database_path('factories/tests/lessons.php');


        \App\Models\Course::factory(10)->create();
        \App\Models\Teacher::factory(10)->create();
        \App\Models\Group::factory(10)->create();
        \App\Models\Student::factory(100)->create();
        \App\Models\Lesson::insert($lessons);
        \App\Models\DaysOfWeek::insert($days_of_week);

        \App\Models\TimeTable::factory(100)->create();


        $branches = Branch::all();
        $class_rooms = ClassRoom::all();
        $teachers = Teacher::all();
        $groups = Group::all();
        $students = Student::all();
        $lessons = \App\Models\Lesson::all();



        $groups->each(function ($group) use ($students, $teachers) {
            $group->students()->attach($students->random(10));
        });

        \App\Models\Absences::factory(100)->create();

    }
}
