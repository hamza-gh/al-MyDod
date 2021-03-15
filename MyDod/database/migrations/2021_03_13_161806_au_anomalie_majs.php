<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AuAnomalieMajs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('au_anomalie_majs', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nom_pr');
            
            $table->string('Descriptif');


            $table->string('email_user')->notnull();
            $table->foreign('email_user')->references('email')->on('users');
            
            $table->string('affectation')->nullable();
            $table->string('etat')->default('Nouveau');
            $table->string('titre');
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
        Schema::dropIfExists('au_anomalie_majs');
    }
}
