<?php

namespace App\Livewire;

use Livewire\Component;

class Gallery extends Component
{
    public $images;
    public $featuredUrl;

    public function mount($images) {
        $this->images = $images;
        $this->featuredUrl = $images->where('featured', true)->first()->url ?? 'https://placehold.it/500x500';
    }
    
    public function render() {
        return view('livewire.gallery');
    }

    public function setFeatured(String $url) {
        $this->featuredUrl = $url;
    }
}
