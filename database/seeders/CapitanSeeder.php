<?php

namespace Database\Seeders;
use App\Capitan;
use Illuminate\Database\Seeder;

class CapitanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Capitan::class)->times(100)->create();
    }
}
