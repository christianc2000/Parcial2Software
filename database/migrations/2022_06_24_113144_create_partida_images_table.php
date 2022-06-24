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
        Schema::create('partida_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('partida_id')->references('id')->on('partidas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('image_id')->references('id')->on('images')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('partida_images');
    }
};
