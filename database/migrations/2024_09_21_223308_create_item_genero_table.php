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
        Schema::create('item_genero', function (Blueprint $table) {
            $table->id('id_item_genero');
            $table->foreignId('item_genero_id_item')->nullable()->constrained('itens','id_item')->onDelete('cascade');
            $table->foreignId('item_genero_id_genero')->nullable()->constrained('genero_itens','id_genero_item')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_genero');
    }
};
