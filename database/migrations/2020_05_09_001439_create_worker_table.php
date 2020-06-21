<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ouvrier', function (Blueprint $table) {
            $table->increments('id');
            $table->string('IDouvrier');
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('mail');
            $table->int('téléphone');
            $table->string('login');
            $table->string('password');
            $table->int('équipe-ID')->unsigned();
            $table->foreign('équipe-ID')->references('IDéquipe')->on('équipes');
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
        Schema::dropIfExists('ouvrier');
    }
}
