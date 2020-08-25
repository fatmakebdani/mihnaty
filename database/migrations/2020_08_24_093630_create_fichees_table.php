<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFicheesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichees', function (Blueprint $table) {
           $table->increments('id');
            $table->string('nom');
            $table->string('adresse');
            $table->integer('code postal');
            $table->string('site')->unique();
            $table->integer('num');
            $table->string('raison sociale');
            $table->date('date de creation');
            $table->string('activité');
            $table->string('photo');
            $table->integer('representant')->unsigned();
            $table->foreign('representant')->references('id')->on('users');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('fichees');
    }
}
