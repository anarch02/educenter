<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Cards extends Component
{
    public $cards;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->cards = [
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

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cards');
    }
}
