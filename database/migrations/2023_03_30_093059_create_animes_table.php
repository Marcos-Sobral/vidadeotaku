<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('animes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Name');
            $table->string('Link');
            $table->string('Status');
            $table->string('Genre');
            $table->longtext('Sinopsis');
            $table->unsignedBigInteger('ImgAnime_id');
            $table->unsignedBigInteger('EPAnime_id');
            $table->unsignedBigInteger('ListaAnime_id');
            $table->foreign('ImgAnime_id')->references('id')->on('img_anime');
            $table->foreign('EPAnime_id')->references('id')->on('ep_animes');
            $table->foreign('ListaAnime_id')->references('id')->on('lista_animes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animes');
    }
};
