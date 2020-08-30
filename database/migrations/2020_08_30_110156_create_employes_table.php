<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->Increments('id');
            
            $table->integer('id_entreprise')->unsigned();
            $table->foreign('id_entreprise')->references('id')->on('fichees');

            $table->integer('id_professionnel')->unsigned();
            $table->foreign('id_professionnel')->references('id')->on('professionnels');
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
        Schema::dropIfExists('employes');
    }
}
