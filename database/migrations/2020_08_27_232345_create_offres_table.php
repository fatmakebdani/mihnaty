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
            $table->Increments('id');
            $table->string('titre');
            $table->string('ville');
            $table->string('description');
            $table->enum('sexe', ['Homme', 'Femme','Quelconque']);
            $table->enum('contrat', ['CDI', 'CDD']);
            $table->enum('statut', ['ouverte', 'cloturée','en_cours_examination','examination_finalisée','attribuée']);
            $table->enum('vérification',['acceptée','refusée','suspendue']);
          
            $table->integer('salaire');
            $table->string('cat');
            $table->date('dernier_delais');
            $table->date('date_examination');
            $table->date('date_notif');
            $table->date('date_fonction');
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
