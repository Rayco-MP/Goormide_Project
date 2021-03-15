<?php

namespace Database\Factories;

use App\Models\Taxi;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaxiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Taxi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'matricula' => $this->faker->regexify('^\\d{4}[A-Z]{3}'),
			'modelo' => $this->faker->randomElement($array = array ('Ford','Seat','Audi','Renault', 'Kia','Volkswagen')),
			'f_matriculacion' => $this->faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
			'dni_chofer' => $this->faker->regexify('^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]$'),
			'kms' => $this->faker->numberBetween($min = 5, $max = 100),
			'fecha_alta' => $this->faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
        ];
    }
}
