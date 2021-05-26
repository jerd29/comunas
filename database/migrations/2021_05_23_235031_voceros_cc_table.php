<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VocerosCcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voceros_cc', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default('1');
            $table->string('name');
            $table->string('second_name');
            $table->string('nacionalidad');
            $table->integer('cedula');
            $table->string('email')->unique();
            $table->string('telefono');
            $table->date('fecha_nacimiento');
            $table->integer('sexo');

            // Integrante al que hace referencia
            $table->unsignedBigInteger('fk_integrante');
            $table->foreign('fk_integrante')->references('id')->on('jefesintegrantes');

            // Voceria que representa
            $table->integer('fk_voceria');


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
