<?php

namespace Database\Factories;

use App\Models\Title;
use Illuminate\Database\Eloquent\Factories\Factory;

class TitleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Title::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre'=>$this->faker->word(),
            'Link'=>$this->faker->randomElement(['https://deblogsyjuegos.files.wordpress.com/2015/10/box_art_de_call_of_duty_advanced_warfare.jpg', 'https://as01.epimg.net/meristation/imagenes/2020/03/02/cover/441787321583141839.jpg','https://romsjuegos.com/wp-content/uploads/sherek20swamp.jpg','https://sm.ign.com/ign_es/game/m/mortal-kom/mortal-kombat-11_d1sx.jpg','https://art.gametdb.com/switch/coverHQ/US/AAAAA.jpg','https://cdn.europosters.eu/image/1300/posters/star-wars-battlefront-2-game-cover-i51530.jpg','https://www.ciudadgamer.com/wp-content/uploads/2011/06/Pepsiman-PC.jpg']),
        ];
    }
}
