<?php

namespace App\Livewire;

use Livewire\Component;

// Models
use App\Models\Advertise;
use App\Models\Category;
use App\Models\State;

// Livewire
use Livewire\WithPagination;

class AdList extends Component
{
    use WithPagination;
    // public $filteredAds;
    public $categories;
    public $states;

    public $selectedState;
    public $selectedCategory;
    public $searchText;

    public function mount() {
        $this->categories = Category::all();
        $this->states = State::all();
    }

    public function updated() {
        $this->resetPage();
    }

    public function render() {
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

        // $this->filteredAds = $query->get();
        // Para o retorno padrão da listagem deve-se utilizar desta forma /\
        // Para o retorno com paginação, deve-se utilizar desta forma \/

        return view('livewire.ad-list', [
            // 'filteredAds' => $query->simplePaginate(4) // Desta forma apresenta apenas o botão de anterior e próximo.
            'filteredAds' => $query->orderBy('created_at', 'desc')->paginate(4) // Desta forma apresenta os botões de antes e depois e os números.
        ]);
    }
}
