<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActiveEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('active_equipment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('area_id');
            $table->string('login_windows')->nullable();
            $table->string('equipo_host')->nullable();
            $table->string('usuario_asignado')->nullable();
            $table->string('tipo');
            $table->string('modelo')->nullable();
            $table->string('marca')->nullable();
            $table->string('serie')->nullable();
            $table->string('nro_producto')->nullable();
            $table->string('ram')->nullable();
            $table->string('disco_duro')->nullable();
            $table->string('procesador')->nullable();
            $table->string('sistema_operativo')->nullable();
            $table->string('ip')->nullable();
            $table->string('mac')->nullable();
            $table->string('mon_marca')->nullable();
            $table->string('mon_serie')->nullable();
            $table->string('mon_modelo')->nullable();
            $table->string('mon_nro_producto')->nullable();
            $table->string('ext_marca')->nullable();
            $table->string('ext_serie')->nullable();
            $table->string('ext_modelo')->nullable();
            $table->string('ext_nro_producto')->nullable();
            $table->string('has_ups')->nullable();
            $table->timestamps();

            $table->foreign('area_id')->references('id')->on('areas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('active_equipment');
    }
}
