<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntegrantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('integrantes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('second_name'); 
            $table->string('nacionalidad');
            $table->integer('cedula');
            $table->string('email')->unique();
            $table->string('telefono');
            $table->date('fecha_nacimiento');  
            $table->integer('sexo'); 

            // Consejo comunal al que pertenece
            // $table->unsignedBigInteger('fk_id_org_cc');
            // $table->foreign('fk_id_org_cc')->references('id')->on('consejo_comunals');


            // Relacion con el Jefe de Familia
            $table->unsignedBigInteger('fk_jefefamilia');
            $table->foreign('fk_jefefamilia')->references('id')->on('jefes_familia');


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
        Schema::dropIfExists('integrantes');
    }
}
