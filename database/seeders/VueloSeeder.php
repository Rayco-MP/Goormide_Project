<?php

namespace Database\Seeders;
use App\Vuelo;
use Illuminate\Database\Seeder;

class VueloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Vuelo::class)->times(1000)->create();
    }
}
