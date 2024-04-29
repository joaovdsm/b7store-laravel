<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//Não precisa incluir o StatesSeeder/CategoriesSeeder com o USE pois os arquivos estão na mesma pasta

class DatabaseSeeder extends Seeder {
    public function run(): void {
        $this->call([StatesSeeder::class]);
        $this->call([CategoriesSeeder::class]);
    }
}
