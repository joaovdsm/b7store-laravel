<?php

namespace App\Livewire;

use Livewire\Component;

//Models
use App\Models\Category;

class AdCreate extends Component {
    public $title;
    public $price;
    public $negotiable;
    public $category_id;
    public $description;

    public function render() {
        $categories = Category::all();
        return view('livewire.ad-create', compact('categories'));
    }

    public function save() {

    }
}
