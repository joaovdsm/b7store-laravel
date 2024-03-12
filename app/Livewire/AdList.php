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
    public $searchText;

    public function mount() {
        $this->categories = Category::all();
        $this->states = State::all();
    }

    public function render()
    {
        $query = Advertise::query();

        if($this->searchText) {
            $query->where('title', 'like', '%'.$this->searchText.'%');
        }

        if($this->selectedCategory) {
            $query->where('category_id', $this->selectedCategory);
        }

        if($this->selectedState) {
            $query->where('state_id', $this->selectedState);
        }

        $this->filteredAds = $query->get();
        return view('livewire.ad-list');
    }
}
