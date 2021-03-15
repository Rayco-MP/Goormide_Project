<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbReservas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_reservas', function (Blueprint $table) {
            $table->id();
			$table->date('pide_reserva');
			$table->dateTime('entrada');
			$table->dateTime('salida');
			$table->foreignId('mascota_id');
			$table->foreignId('habitacion_id');
			$table->foreignId('dieta_id');
            $table->timestamps();
			$table->foreign('mascota_id')->references('id')->on('tb_mascotas');
			$table->foreign('habitacion_id')->references('id')->on('tb_habitaciones');
			$table->foreign('dieta_id')->references('id')->on('tb_dietas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_reservas');
    }
}
