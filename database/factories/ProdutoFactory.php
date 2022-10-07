<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'nome' => fake()->name(),
            'descricao' => fake()->paragraph(),
            'valor' => fake()->numberBetween(100, 5000),
            'estoque' => fake()->numberBetween(1, 50),
        ];
    }
}
