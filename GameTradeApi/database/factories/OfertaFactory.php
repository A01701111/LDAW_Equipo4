<?php

namespace Database\Factories;

use App\Models\Oferta;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfertaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Oferta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ID_Estatus'=>$this->faker->numberBetween(1,3),
            'ID_Videojuego_Ofertado'=>$this->faker->numberBetween(1,50),
            'ID_Videojuego_Poseido'=>$this->faker->numberBetween(1,50),
        ];
    }
}
