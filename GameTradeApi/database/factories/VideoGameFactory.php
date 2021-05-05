<?php

namespace Database\Factories;

use App\Models\Videogame;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideogameFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Videogame::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ID_Title' => $this->faker->numberBetween(1,10),
            'ID_User'=> $this->faker->numberBetween(1,50),
            'Descripcion'=> $this->faker->text(100),
            'Consola'=>$this->faker->randomElement(['Xbox One', 'PS1','PS2','PS3','PS4','PS5','Switch']),
            'Estado_Fisico'=>$this->faker->randomElement(['Excelente', 'Bueno','Malo','Intermedio']),
        ];
    }
}
