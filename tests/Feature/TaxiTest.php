<?php

namespace Tests\Feature;

use App\Models\Taxi;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaxiTest extends TestCase
{
    use WithFaker;
	/**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        //$response = $this->get('/');
		$response = $this->json('POST', '/taxis', [
			'matricula' => $this->faker->regexify('^\\d{4}[A-Z]{3}'),
			'modelo' => 'Mario',
			'f_matriculacion' => $this->faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now')->format("Y-m-d"),
			'dni_chofer' => $this->faker->regexify('^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]$'),
			'kms' => $this->faker->numberBetween($min = 5, $max = 100),
			'fecha_alta' => $this->faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now')->format("Y-m-d"),
		]);


        $response->assertStatus(302);

		/*$datosTaxi = [
			'matricula' => $this->faker->regexify('^\\d{4}[A-Z]{3}'),
			'modelo' => $this->faker->randomElement($array = array ('Ford','Seat','Audi','Renault', 'Kia','Volkswagen')),
			'f_matriculacion' => $this->faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now')->format("Y-m-d"),
			'dni_chofer' => $this->faker->regexify('^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]$'),
			'kms' => $this->faker->numberBetween($min = 5, $max = 100),
			'fecha_alta' => $this->faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now')->format("Y-m-d"),
		];
        $response = $this->json('POST', '/taxis', $datosTaxi );

        $response
            ->assertStatus(302);*/
    }
}
