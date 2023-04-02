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
        Schema::create('ep_animes', function (Blueprint $table) {
            $table->id('id');
            $table->string('Name');
            $table->string('Link');
            $table->string('Status');
            $table->unsignedBigInteger('Anime_id');
            $table->unsignedBigInteger('ImgEPAnime_id');
            $table->foreign('Anime_id')->references('id')->on('animes');
            $table->foreign('ImgEPAnime_id')->references('id')->on('img_ep_animes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ep_animes');
    }
};
