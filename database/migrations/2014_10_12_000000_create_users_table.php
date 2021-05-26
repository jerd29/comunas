<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('second_name')->nullable(); 
            $table->string('username')->nullable();
            $table->string('nacionalidad')->nullable();
            $table->integer('cedula')->nullable();
            $table->string('email')->unique();
            $table->string('telefono')->nullable();
            $table->string('password');
            $table->boolean('status')->nullable();
            $table->integer('user_rol')->nullable();
            $table->string('tipo_org')->nullable();
            $table->integer('fk_org')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
