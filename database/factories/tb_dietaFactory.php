<?php

namespace Database\Factories;

use App\Models\tb_dieta;
use Illuminate\Database\Eloquent\Factories\Factory;

class tb_dietaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = tb_dieta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tipo_dieta' => $this->faker->randomElement($array = array ('Vegetarianas','Mediterránea', 'Baja en sodio', 'Libre de gluten', 'Baja en purinas', 'Bajas en hidratos de carbono', 'Bajas en grasas', 'Bajas en calorías', 'Hipocalórica', 'Paleo', 'Alcalina')),
			'precio' => $this->faker->numberBetween($min = 50, $max = 150)
        ];
    }
}
