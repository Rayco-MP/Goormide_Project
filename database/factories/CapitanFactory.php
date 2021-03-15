<?php

namespace Database\Factories;

use App\Models\Capitan;
use Illuminate\Database\Eloquent\Factories\Factory;

class CapitanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Capitan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstNameMale,
			'apellidos' => $this->faker->lastName,
			'f_nacimiento' => $this->faker->dateTimeBetween($startDate = '32/12/1900', $endDate = '31/12/2000')->format("Y-m-d"),
			'email' => $this->faker->email,
        ];
    }
}
