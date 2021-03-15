<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BiAnomalieMajs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bi_anomalie_majs', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('nom rapport');
            $table->string('description');

            $table->string('email_user')->notnull();
            $table->foreign('email_user')->references('email')->on('users');
            $table->string('affectation')->nullable();
            $table->string('etat')->default('Nouveau');
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
        Schema::dropIfExists('bi_anomalie_majs');
    }
}
