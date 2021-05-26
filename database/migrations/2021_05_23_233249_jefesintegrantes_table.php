<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JefesintegrantesTable extends Migration
{
    public function up()
    {
        Schema::create('jefesintegrantes', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default('1');

            // Consejo comunal al que pertenece
            $table->unsignedBigInteger('fk_id_org_cc');
            $table->foreign('fk_id_org_cc')->references('id')->on('consejo_comunals');

            // Integrante al que hace referencia
            $table->unsignedBigInteger('fk_cargafamiliar');
            $table->foreign('fk_cargafamiliar')->references('id')->on('integrantes');

            // Comuna al que pertenece
            $table->unsignedBigInteger('fk_jefefamilia');
            $table->foreign('fk_jefefamilia')->references('id')->on('jefes_familia');

            $table->boolean('fk_tipointegrante')->default('1');



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
        Schema::dropIfExists('jefesintegrantes');

    }
}

