<?php

namespace App\Livewire;

use Livewire\Component;

//Models
use App\Models\Category;
use Livewire\WithFileUploads;

class AdCreate extends Component {
    // Necessário para o upload de arquivos
    use WithFileUploads;
    public $images;

    public $title;
    public $price;
    public $negotiable;
    public $description;
    public $category_id;

    protected $rules = [
        'title' => 'required|min:8|max:255',
        'price' => 'required|numeric',
        'negotiable' => 'boolean',
        'description' => 'required|min:8|max:255',
        'category_id' => 'required|exists:categories,id'
    ];

    public function render() {
        $categories = Category::all();
        return view('livewire.ad-create', compact('categories'));
    }

    public function save() {
        $this->validate();
        dd($this->images);
    }
}
