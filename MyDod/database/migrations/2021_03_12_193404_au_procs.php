<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AuProcs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('au_procs', function (Blueprint $table) {
            $table->increments('id');

            $table->string('Objectif',1000);
            $table->string('Processus',1000);
            $table->integer('Processus_etp');
            $table->string('gain',1000);
            $table->string('Planification',100);
            $table->string('Canal',50);
            $table->string('Utilisateurs',1000);
            $table->string('PJ')->nullable();
            


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
        Schema::dropIfExists('au_procs');
    }
}
