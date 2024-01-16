<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Http\Controllers\DashboardController;

class Sidebar extends Component
{
    public array $sidebar;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $dashboard = new DashboardController;

        $this->sidebar = $dashboard->getSidebar();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar');
    }
}
