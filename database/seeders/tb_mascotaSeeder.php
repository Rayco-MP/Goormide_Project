<?php

namespace Database\Seeders;
use App\tb_mascota;
use Illuminate\Database\Seeder;

class tb_mascotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(tb_mascota::class)->times(50)->create();
    }
}
