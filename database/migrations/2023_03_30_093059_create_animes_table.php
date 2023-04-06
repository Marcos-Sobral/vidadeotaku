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
            $table->unsignedBigInteger('img_anime_id');
            $table->unsignedBigInteger('ep_anime_id');
            $table->unsignedBigInteger('lista_anime_id');
            if (Schema::hasTable('img_anime')) {
                $table->foreign('img_anime_id')->references('id')->on('img_anime')->onDelete('cascade');
            }
            if (Schema::hasTable('ep_animes')) {
                $table->foreign('ep_anime_id')->references('id')->on('ep_animes')->onDelete('cascade');
            }
            if (Schema::hasTable('lista_animes')) {
                $table->foreign('lista_anime_id')->references('id')->on('lista_animes')->onDelete('cascade');
            }
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
