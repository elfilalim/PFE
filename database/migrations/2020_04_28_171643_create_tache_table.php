<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTacheTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tâche', function (Blueprint $table) {
            $table->increments('id_tâche');
            $table->string('Nomtâche');
            $table->date('date-début');
            $table->date('date-fin');
            $table->string('etat-tâche');
            $table->int('priorité');
            $table->int('projet-ID')->unsigned();
            $table->foreign('projet-ID')->references('IDprojet')->on('projets');
            $table->string('chef-ID')->unsigned();
            $table->foreign('chef-ID')->references('IDchef')->on('chefs');
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
        Schema::dropIfExists('t�che');
    }
}
