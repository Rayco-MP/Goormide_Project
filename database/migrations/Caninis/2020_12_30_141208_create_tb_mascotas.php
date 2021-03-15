<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbMascotas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_mascotas', function (Blueprint $table) {
            $table->id();
			$table->foreignId('cliente_id');
			$table->string('nombre');
			$table->string('sexo');
			$table->string('raza');
			$table->string('color');
			$table->string('peso');
			$table->date('fecha_nacimiento');
			$table->integer('microchip');
			$table->boolean('esterilizado');
            $table->timestamps();
			$table->foreign('cliente_id')->references('id')->on('tb_clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_mascotas');
    }
}
