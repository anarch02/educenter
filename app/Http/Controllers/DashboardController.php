<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getSidebar()
    {
        return [
            "main" => [
                [
                    'title' => 'dashboard',
                    'route' => 'home',
                    'icon' => 'fe fe-grid',
                ],
            ],
            'timetable' => [
                [
                    'title' => 'lessons',
                    'route' => 'lessons.index',
                    'icon' => 'fe fe-book-open', // Иконка для lessons
                ],
                [
                    'title' => 'timetable',
                    'route' => 'time_tables.index',
                    'icon' => 'fe fe-calendar',
                ],
            ],
            'stucture' => [
                [
                    'title' => 'branches',
                    'route' => 'branches.index',
                    'icon' => 'fe fe-layers',
                ],
                [
                    'title' => 'class_rooms',
                    'route' => 'class_rooms.index',
                    'icon' => 'fe fe-grid', // Иконка для classrooms
                ],

            ],
            'study' => [
                [
                    'title' => 'subjects',
                    'route' => 'subjects.index',
                    'icon' => 'fe fe-book',
                ],
                [
                    'title' => 'courses',
                    'route' => 'courses.index',
                    'icon' => 'fe fe-book-open',
                ],
                [
                    'title' => 'groups',
                    'route' => 'groups.index',
                    'icon' => 'fe fe-users', // Иконка для groups
                ],
            ],

            'users' => [
                [
                    'title' => 'teachers',
                    'route' => 'teachers.index',
                    'icon' => 'fe fe-user-check', // Иконка для teachers
                ],
                [
                    'title' => 'students',
                    'route' => 'students.index',
                    'icon' => 'fe fe-users',
                ],
            ],
        ];
    }


    public function getCards()
    {
        return [
            [
                'title' => 'students',
                'icon' => 'fe fe-users',
                'count' => \App\Models\Student::count(),
                'color' => 'bg-primary box-primary-shadow',
            ],
            [
                'title' => 'teachers',
                'icon' => 'fe fe-users',
                'count' => \App\Models\Teacher::count(),
                'color' => 'bg-secondary box-secondary-shadow',
            ],
            [
                'title' => 'subjects',
                'icon' => 'fe fe-book',
                'count' => \App\Models\Subject::count(),
                'color' => 'bg-info box-info-shadow',
            ],
            [
                'title' => 'branches',
                'icon' => 'fe fe-layers',
                'count' => \App\Models\Branch::count(),
                'color' => 'bg-warning box-warning-shadow',
            ],
        ];
    }
}
