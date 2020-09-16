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
            $table->id();
            $table->string('titre');
            $table->string('ville');
            $table->string('description');
            $table->enum('sexe', ['H', 'F','Q']);
            $table->enum('contrat', ['CDI', 'CDD']);
            $table->enum('statut', ['ouvert', 'examin','attribue']);
            $table->integer('salaire');
            $table->string('cat');
            $table->date('dernier_delais');
            $table->date('date_notif');
            $table->date('date_fonction');
            $table->integer('rec_id')->unsigned();
            $table->foreign('rec_id')->references('id')->on('users');
            $table->integer('entreprise_id')->unsigned();
            $table->foreign('entreprise_id')->references('id')->on('fichees');
            
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
