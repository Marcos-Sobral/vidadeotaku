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
        Schema::create('img_ep_animes', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->timestamps();
        });
        
        Schema::create('ep_animes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('link');
            $table->string('status');
            $table->unsignedBigInteger('anime_id');
            $table->unsignedBigInteger('img_ep_anime_id');
            $table->foreign('anime_id')->references('id')->on('animes');
            $table->foreign('img_ep_anime_id')->references('id')->on('img_ep_animes');
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
