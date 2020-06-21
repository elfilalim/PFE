<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Materiel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ressources', function (Blueprint $table) {
            $table->string('type');//varchar(255)
            $table->string('id_res');
            $table->int('projet-ID')->unsigned();
            $table->foreign('projet-ID')->references('IDprojet')->on('projets');
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
        //
    }
}
