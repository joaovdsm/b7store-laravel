<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

// Model
use App\Models\Advertise;

class FilteredAdvertises extends Component
{
    public $advertises;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->advertises = Advertise::all();
        // $this->advertises = [
        //     [ 'href'  => '#', 'image'   => 'http://placehold.it/150x150', 'name'  => 'Bola de Futebol Americano Wilson', 'price' => 'R$ 138,61' ],
        //     [ 'href'  => '#', 'image'   => 'http://placehold.it/150x150', 'name'  => 'Tênis vans Baby - 1 ano', 'price' => 'R$ 189,99' ],
        //     [ 'href'  => '#', 'image'   => 'http://placehold.it/150x150', 'name'  => 'Controle PS4 - Preto', 'price' => 'R$ 275,00' ],
        // ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.filtered-advertises');
    }
}
