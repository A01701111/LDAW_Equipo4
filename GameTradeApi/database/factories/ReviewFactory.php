<?php

namespace Database\Factories;

use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ID_User'=>$this->faker->numberBetween(1,50),
            'ID_Videojuego'=>$this->faker->numberBetween(1,50),
            'Contenido'=>$this->faker->text(200),
        ];
    }
}
