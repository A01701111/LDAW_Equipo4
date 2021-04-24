<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre' => $this->faker->name(),
            'Username'=> $this->faker->userName(),
            'Email'=> $this->faker->email(),
            'Password'=>$this->faker->password(),
            'ID_Rol'=>$this->faker->numberBetween(1,2),
        ];
    }
}
