<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class hero extends Component
{
    public $categories;
    public $states;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->categories = [
            ['value' => 'carros', 'name' => 'Carros'],
            ['value' => 'eletronicos', 'name' => 'Eletrônicos'],
            ['value' => 'roupas', 'name' => 'Roupas'],
        ];

        $this->states = [
            ['value' => 'RS', 'name' => 'Rio Grande do Sul'],
            ['value' => 'SC', 'name' => 'Santa Catarina'],
            ['value' => 'SP', 'name' => 'São Paulo']
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hero');
    }
}
