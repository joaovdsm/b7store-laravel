<?php

namespace App\Livewire;

use Livewire\Component;

// Models
use App\Models\Advertise;

class AdList extends Component
{
    public $filteredAds;

    public function mount() {
        $this->filteredAds = Advertise::all();
    }

    public function render()
    {
        return view('livewire.ad-list');
    }
}
