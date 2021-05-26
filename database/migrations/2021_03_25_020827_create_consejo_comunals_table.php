<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsejoComunalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consejo_comunals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('situr'); 
            $table->integer('integrantes');
            $table->integer('familias');
            $table->integer('estado')->nullable();
            $table->integer('municipio')->nullable();
            $table->integer('parroquia')->nullable();
            $table->boolean('status')->default('1');

            // Creador Por el usuario
            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')->references('id')->on('users');

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
        Schema::dropIfExists('consejo_comunals');
    }
}
