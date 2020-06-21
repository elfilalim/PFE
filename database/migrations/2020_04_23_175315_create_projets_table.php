<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->increments('IDprojet');
            $table->string('nom-projet');//varchar(255)            
            $table->date('date-début');
            $table->date('date-fin');
            $table->string('etat-projet');
            $table->string('id-client')->unsigned();
            $table->foreign('id-client')->references('IDclient')->on('clients');
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
        Schema::dropIfExists('projets');
    }
}
