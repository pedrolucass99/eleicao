<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('parties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('numerodopartido');
            $table->string('sigla');
            $table->unsignedInteger('election_id');
            $table->foreign('election_id')->references('id')->on('elections');

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
        Schema::dropIfExists('parties');
    }
}
