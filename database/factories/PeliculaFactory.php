<?php

namespace Database\Factories;

use App\Models\Pelicula;
use Illuminate\Database\Eloquent\Factories\Factory;

class PeliculaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pelicula::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=> $this->faker->sentence(),
            'descripcion'=> $this->faker->paragraph(),
            'categoria'=> $this->faker->randomElement(['Terror','Animandas', 'Suspensos', 'Drama'])
        ];
    }
}
