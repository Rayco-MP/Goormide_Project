<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbCitasXServicios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_citas_x_servicios', function (Blueprint $table) {
             $table->foreignId('cita_id');
			$table->foreignId('servicio_id');
			$table->string('precio');
			$table->integer('cantidad');
			$table->double('descuento');
            $table->timestamps();
			$table->foreign('cita_id')->references('id')->on('tb_citas');
			$table->foreign('servicio_id')->references('id')->on('tb_servicios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_citas_x_servicios');
    }
}
