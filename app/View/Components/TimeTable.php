<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TimeTable extends Component
{
    public $lessons;
    public $days_of_week;
    public $object;
    /**
     * Create a new component instance.
     */
    public function __construct($object)
    {
        $this->object = $object;
        $this->lessons = \App\Models\Lesson::all()
            ->sortBy('start_time');
        $this->days_of_week = \App\Models\DaysOfWeek::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.time-table');
    }
}
