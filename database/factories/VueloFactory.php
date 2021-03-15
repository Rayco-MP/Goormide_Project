<?php

namespace Database\Factories;

use App\Models\Vuelo;
use Illuminate\Database\Eloquent\Factories\Factory;

class VueloFactory extends Factory
{
	/**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vuelo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
		/*$factory->define(App\Posts::class, function (Faker\Generator $faker) {
    	$users = App\Capitan::pluck('id')->toArray(); 
		return [
			'capitan_id' => $faker->randomElement($capitanes),
			'lat_origen' => $this->faker->latitude($min = -90, $max = 90),
			'lng_origen' => $this->faker->longitude($min = -180, $max = 180),
			'lat_destino' => $this->faker->latitude($min = -90, $max = 90),
			'lng_destino' => $this->faker->longitude($min = -180, $max = 180),
			'coste' => $this->faker->numberBetween($min = 50000, $max = 100000),
		];
	});*/

		
        return [
            'capitan_id' => $this->faker->numberBetween($min = 1, $max = 100),
			'fecha' => $this->faker->dateTimeBetween($startDate = '32/12/1900', $endDate = '31/12/2000')->format("Y-m-d"),
			'lat_origen' => $this->faker->latitude($min = -90, $max = 90),
			'lng_origen' => $this->faker->longitude($min = -180, $max = 180),
			'lat_destino' => $this->faker->latitude($min = -90, $max = 90),
			'lng_destino' => $this->faker->longitude($min = -180, $max = 180),
			'coste' => $this->faker->numberBetween($min = 50000, $max = 100000),
        ];
    }
}
