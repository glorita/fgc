<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
            Schema::create('alumno', function (Blueprint $table) {
            $table->increments('id_alumno');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('id_pnacionalidad');
            $table->string('tsangre');
            $table->dateTime('dcreado');
            $table->integer('edad');
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
        //
    }
}
