<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComunaConsejocomunalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comuna_consejocomunals', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default('1');

            // Comuna al que pertenece
            $table->unsignedBigInteger('fk_id_org_comuna');
            $table->foreign('fk_id_org_comuna')->references('id')->on('comunas');

            // Consejo comunal al que pertenece
            $table->unsignedBigInteger('fk_id_org_cc');
            $table->foreign('fk_id_org_cc')->references('id')->on('consejo_comunals');


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
        Schema::dropIfExists('comuna_consejocomunals');
    }
}
