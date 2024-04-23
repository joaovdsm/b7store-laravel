<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

// Models
use \App\Models\Category;
use \App\Models\State;

class hero extends Component
{
    public $categories;
    public $states;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->categories = Category::all();
        $this->states = State::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hero');
    }
}
