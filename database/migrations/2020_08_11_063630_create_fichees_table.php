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
            $table->integer('code_postal');
            $table->string('site')->unique();
            $table->integer('num');
            $table->string('raison_sociale');
            $table->date('date_de_creation');
            $table->string('activité');
            $table->string("photo");
            $table->integer('representant_id')->unsigned();
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
