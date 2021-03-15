<?php

namespace Database\Seeders;
use App\tb_habitacion;
use Illuminate\Database\Seeder;

class tb_habitacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(tb_habitacion::class)->times(100)->create();
    }
}
