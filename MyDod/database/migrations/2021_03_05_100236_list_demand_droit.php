<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ListDemandDroit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sh_l_droits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email_user')->notnull();
            $table->foreign('email_user')->references('email')->on('users');
            $table->string('nom_l');
            $table->string('utilisateur',1000);
            $table->string('PJ')->nullable();
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
        Schema::dropIfExists('sh_l_droits');
    }
}
