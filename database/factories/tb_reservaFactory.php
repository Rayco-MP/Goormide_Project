<?php

namespace Database\Factories;

use App\Models\tb_reserva;
use Illuminate\Database\Eloquent\Factories\Factory;

class tb_reservaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = tb_reserva::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pide_reserva' => $this->faker->dateTimeBetween($startDate = '32/12/2000', $endDate = '31/12/2020')->format("Y-m-d"),
			'entrada' => $this->faker->dateTimeBetween($startDate = '32/12/2000', $endDate = '31/12/2020')->format("Y-m-d"),
			'salida' => $this->faker->dateTimeBetween($startDate = '32/12/2000', $endDate = '31/12/2020')->format("Y-m-d"),
			'mascota_id' => $this->faker->numberBetween($min = 1, $max = 50),
			'habitacion_id' => $this->faker->numberBetween($min = 1, $max = 50),
			'dieta_id' => $this->faker->numberBetween($min = 1, $max = 6),
        ];
    }
}
