<?php

namespace Database\Factories;

use App\Models\tb_cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class tb_clienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = tb_cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName,
			'apellidos' => $this->faker->lastName,
			'direccion' => $this->faker->streetAddress,
			'cp' => $this->faker->regexify('/^[0-9]{5}'),
			'localidad' => $this->faker->city,
			'provincia' => $this->faker->state,
			'pais' => $this->faker->country,
			'telefono' => $this->faker->regexify('(6|7)[0-9]{8}'),
			'email' => $this->faker->freeEmail,
			'nif' => $this->faker->regexify('/^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]'),
        ];
    }
}
