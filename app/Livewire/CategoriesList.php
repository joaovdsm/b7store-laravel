<?php

namespace App\Livewire;

use Livewire\Component;

// Models
use App\Models\Category;


class CategoriesList extends Component
{
    public function render()
    {
        $data['categories'] = Category::all();

        return view('livewire.categories-list', $data);
    }
}
