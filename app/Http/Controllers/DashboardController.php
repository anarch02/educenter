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
}
