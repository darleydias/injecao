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
        Schema::create('trabalho', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_executor');
            $table->integer('id_servico')->unsigned();
            $table->timestamp('tempoInicio')->nullable()->default(time());
            $table->timestamp('tempoFim')->nullable()->default(time());
            $table->integer('trabalhoPausa');
            $table->timestamps();

            $table->foreign('id_servico')->references('id')->on('servico');
            $table->foreign('id_executor')->references('id')->on('pessoa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trabalho');
    }
};
