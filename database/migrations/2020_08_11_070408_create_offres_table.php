<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->increments('id');
            $table->text('description');
            $table->enum('statut', ['libre', 'en cours_examen','attribuée']);
            $table->string('wilaya');
            $table->enum('sexe', ['homme', 'femme','quelconque']);
            $table->enum('categotie', ['Informatique,Télecom,Internet', 'Energie,Mines','Banque,Assurances,Finance','Commerce','Services','Fonction publique,administration','Autres']);
            $table->date('denier_delais');
            $table->date('date_notification');
            $table->date('date_prise_fonction');
            $table->integer('ficheE_id')->unsigned();
            $table->foreign('ficheE_id')->references('id')->on('fichees');
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
        Schema::dropIfExists('offres');
    }
}
