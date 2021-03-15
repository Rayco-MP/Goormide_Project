<?php

namespace Database\Seeders;
use App\tb_cliente;
use Illuminate\Database\Seeder;

class tb_clienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(tb_cliente::class)->times(50)->create();
    }
}
