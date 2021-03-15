<?php

namespace Database\Seeders;
use App\Taxi;
use Illuminate\Database\Seeder;

class TaxiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Taxi::class)->times(100)->create();
    }
}
