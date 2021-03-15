<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BoRapports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bo_rapports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('object');
            $table->string('n_rapport');
            $table->string('univers');
            $table->string('c_extraires');
            $table->string('filtres');
            $table->string('liste_d');
            $table->string('planification');
            $table->string('serveur');


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
        Schema::dropIfExists('bo_rapports');
    }
}
