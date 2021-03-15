<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BiRapports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bi_rapports', function (Blueprint $table) {
                $table->increments('id');
                $table->string('objet');
                $table->string('nom Rapport');
                $table->string('technologie');
                $table->string('categorie');
                $table->string('cycle de vie');
                $table->string('utilisateurs');
                $table->string('planification');
                $table->string('PJ');

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
        Schema::dropIfExists('bi_rapports');
    }
}
