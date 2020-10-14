<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJurysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurys', function (Blueprint $table) {
             $table->Increments('id');
            
            $table->integer('offre_id')->unsigned();
            $table->foreign('offre_id')->references('id')->on('offres')->onDelete('cascade');

            $table->integer('professionnel_id')->unsigned();
            $table->foreign('professionnel_id')->references('id')->on('professionnels');
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
        Schema::dropIfExists('jurys');
    }
}
