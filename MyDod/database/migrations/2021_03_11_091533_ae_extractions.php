<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AeExtractions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ae_extractions', function (Blueprint $table) {
            $table->increments('id');

            $table->string('Type_d');
            $table->string('Source_d');
            $table->string('Descriptif');


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
        Schema::dropIfExists('ae_extractions');
    }
}
