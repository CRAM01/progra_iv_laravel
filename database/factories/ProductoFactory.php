<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word,
            'descripcion' => $this ->faker->sentence,
            'precio' => $this->faker->numberBetween(10,70),
            'estado'=>true,
            'created_at'=>now(),
            'updated_at'=>now(), 
            //
        ];
    }
}
