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
        Schema::create('sub_itens', function (Blueprint $table) {
            $table->id('id_sub_item');
            $table->string("titulo_sub_item")->nullable();
            $table->string("arquivo_sub_item")->nullable();
            $table->string("link_sub_item")->nullable();
            $table->foreignId('sub_item_id_item')->nullable()->constrained('itens','id_item')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_itens');
    }
};
