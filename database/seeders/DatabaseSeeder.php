<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
		//\App\Models\Taxi::factory(100)->create();
		//\App\Models\Capitan::factory(100)->create();
		//\App\Models\Vuelo::factory(1000)->create();
		//\App\Models\tb_cliente::factory(50)->create();
		//\App\Models\tb_mascota::factory(50)->create();
		//\App\Models\tb_habitacion::factory(50)->create();
		//\App\Models\tb_dieta::factory(10)->create();
		\App\Models\tb_reserva::factory(10)->create();
    }
}
