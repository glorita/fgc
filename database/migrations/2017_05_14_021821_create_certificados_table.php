<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
            Schema::create('certificados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('id_instructor');
            $table->bigInteger('nalumnos');
            $table->dateTime('dcreada');
            $table->date('dfecha_pago');
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
