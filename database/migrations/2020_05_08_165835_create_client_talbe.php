<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTalbe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('IDclient');
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('mail');
            $table->int('téléphone');
            $table->string('login');
            $table->string('password');
            $table->string('id-projet')->unsigned();
            $table->foreign('id-projet')->references('IDprojet')->on('projets');
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
        Schema::dropIfExists('clients');
    }
}
