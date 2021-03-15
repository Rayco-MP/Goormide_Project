<?php

namespace Database\Factories;

use App\Models\tb_mascota;
use Illuminate\Database\Eloquent\Factories\Factory;

class tb_mascotaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = tb_mascota::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cliente_id' => $this->faker->numberBetween($min = 1, $max = 50),
			'nombre' => $this->faker->firstName,
			'sexo' => $this->faker->randomElement($array = array ('Macho','Hembra')),
			'raza' => $this->faker->randomElement($array = array ('Golden Retriever','Husky','Alaskan Malamute','Pastor Alemán', 'Samoyedo','Dalmata', 'Chow-chow', 'Chihuahua', 'Beagle', 'Terrier inglés', 'Carlino', 'Yorkshire', 'Collie', 'San Bernardo', 'Cocker Spaniel', 'Caniche', 'Chin Japonés', 'Doberman', 'Bulldog', 'Boxer', 'Fox Terrier', 'Shar Pei', 'Galgo', 'Rottweiler', 'Mastín Inglés')),
			'color' => $this->faker->safeColorName,
			'peso' => $this->faker->numberBetween($min = 1, $max = 150),
			'fecha_nacimiento' => $this->faker->dateTimeBetween($startDate = '32/12/2000', $endDate = '31/12/2020')->format("Y-m-d"),
			'microchip' => $this->faker->regexify('/^[0-9]{9}'),
			'esterilizado' => $this->faker->randomElement($array = array ('0','1')),
        ];
    }
}
