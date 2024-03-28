<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getSidebar()
    {
        return [
            [
                'title' => 'dashboard',
                'route' => 'home',
                'icon' => 'fe fe-home',
            ],
            [
                'title' => 'branches',
                'icon' => 'fe fe-layers',
                'sub_menu' => [
                    [
                        'title' => 'branches',
                        'route' => 'branches.index',
                    ],
                    [
                        'title' => 'class_rooms',
                        'route' => 'class_rooms.index',
                    ],
                    [
                        'title' => 'groups',
                        'route' => 'groups.index',
                    ],
                    [
                        'title' => 'teachers',
                        'route' => 'teachers.index',
                    ],
                    [
                        'title' => 'lessons',
                        'route' => 'lessons.index',
                    ],
                ]
            ],
            [
                'title' => 'students',
                'route' => 'students.index',
                'icon' => 'fe fe-users',
            ],
            [
                'title' => 'subjects',
                'route' => 'subjects.index',
                'icon' => 'fe fe-book',
            ],
            [
                'title' => 'timetable',
                'route' => 'time_tables.index',
                'icon' => 'fe fe-calendar',
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
