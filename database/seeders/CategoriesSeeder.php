<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Category;

class CategoriesSeeder extends Seeder {
    public function run(): void {
        $categories = [
            ['name' => 'Carros', 'icon' => '/assets/icons/carIcon.png', 'slug' => 'carros'],
            ['name' => 'Eletrônicos', 'icon' => '/assets/icons/eletronicsIcon.png', 'slug' => 'eletronicos'],
            ['name' => 'Roupas', 'icon' => '/assets/icons/clothesIcon.png', 'slug' => 'roupas'],
            ['name' => 'Esportes', 'icon' => '/assets/icons/sportsIcon.png', 'slug' => 'esportes'],
            ['name' => 'Bebês', 'icon' => '/assets/icons/babiesIcon.png', 'slug' => 'bebe'],
        ];

        Category::insert($categories);
    }
}
