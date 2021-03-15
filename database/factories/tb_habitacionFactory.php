<?php

namespace Database\Factories;

use App\Models\tb_habitacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class tb_habitacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = tb_habitacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'habitacion' => $this->faker->numberBetween($min = 1, $max = 100),
			'precio' => $this->faker->numberBetween($min = 50, $max = 150)
        ];
    }
}
