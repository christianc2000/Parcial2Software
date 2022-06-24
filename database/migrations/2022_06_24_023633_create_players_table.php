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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedInteger('pasos')->nullable();//cantidad de movimientos que dá el jugador en el juego
            $table->boolean('ganador');
            $table->unsignedInteger('puntos_ganados')->nullable();
            $table->unsignedInteger('ayuda')->default(4);
            $table->foreignId('perfil_user_id')->references('id')->on('perfil_users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('partida_id')->references('id')->on('partidas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('tipo_player_id')->references('id')->on('tipo_players')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('players');
    }
};
