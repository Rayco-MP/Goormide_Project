<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxis', function (Blueprint $table) {
            $table->id();
			$table->string('matricula');
			$table->string('modelo');
			$table->dateTime('f_matriculacion');
			$table->string('dni_chofer');
			$table->string('kms');
			$table->dateTime('fecha_alta');
			$table->dateTime('f_creacion');
			$table->dateTime('f_actualizacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taxis');
    }
}
