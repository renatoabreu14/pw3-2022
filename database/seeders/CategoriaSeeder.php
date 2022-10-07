<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Produto;
use App\Models\Subcategoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //Categoria::factory(10)->create();
        Categoria::factory(3)
            ->has(Subcategoria::factory()->count(3)
                ->has(Produto::factory()->count(10))
            )
            ->create();
    }
}
