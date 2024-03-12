<?php

namespace App\Livewire;

use Livewire\Component;

// Models
use App\Models\Advertise;
use App\Models\Category;
use App\Models\State;

class AdList extends Component
{
    public $filteredAds;
    public $categories;
    public $states;

    public $selectedState;
    public $selectedCategory;

    public function mount() {
        $this->categories = Category::all();
        $this->states = State::all();
    }

    public function render()
    {
        $this->filteredAds = Advertise::all();
        return view('livewire.ad-list');
    }
}
