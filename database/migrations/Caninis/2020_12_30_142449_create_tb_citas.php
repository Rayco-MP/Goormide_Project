<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbCitas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_citas', function (Blueprint $table) {
            $table->id();
			$table->date('fecha_pide_cita');
			$table->date('fecha_cita');
			$table->dateTime('hora_inicio');
			$table->dateTime('hora_fin');
			$table->foreignId('mascota_id');
            $table->timestamps();
			$table->foreign('mascota_id')->references('id')->on('tb_mascotas');	
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_citas');
    }
}
