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
        Schema::create('listas', function (Blueprint $table) {
            $table->id("id_lista");
            $table->string("nome_lista");
            $table->string("descricao_lista")->nullable();;
            $table->string("img_lista")->nullable();
            $table->boolean("is_public")->default(false)->nullable();
            $table->foreignId('lista_id_user')->nullable()->constrained('users','id')->onDelete('cascade');
            $table->foreignId('lista_id_status')->nullable()->constrained('status_listas','id_status_lista')->onDelete('cascade');
            $table->foreignId('lista_id_tipo')->nullable()->constrained('tipo_listas','id_tipo_lista')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listas');
    }
};
