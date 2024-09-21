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
        Schema::create('itens', function (Blueprint $table) {
            $table->id("id_item");
            $table->string("nome_item");
            $table->string("descricao_item")->nullable();
            $table->string("cronologia_item")->nullable();
            $table->string("img_item")->nullable();
            $table->boolean("is_public")->default(false)->nullable();
            $table->timestamps();
            $table->foreignId('item_id_user')->nullable()->constrained('users','id')->onDelete('cascade');
            $table->foreignId('item_id_status')->nullable()->constrained('status_itens','id_status_item')->onDelete('cascade');
            $table->foreignId('item_id_tipo')->nullable()->constrained('tipo_itens','id_tipo_item')->onDelete('cascade');
            $table->foreignId('item_id_autor')->nullable()->constrained('autor_itens','id_autor_item')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itens');
    }
};
