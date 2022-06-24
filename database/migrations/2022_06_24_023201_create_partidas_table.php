<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidas', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('catidad_players');
            $table->unsignedInteger('match_players'); //Jugadores jugando
            $table->time('tiempo_finalizado');
            $table->boolean('disponible');
            $table->string('link_invitacion');
            $table->foreignId('nivel_id')->references('id')->on('nivels')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('partidas');
    }
};
