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
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('customer_id');
            $table->string('customer_name');
            $table->string('customer_CNPJ');
            $table->string('customer_cel');
            $table->string('customer_email');
            $table->string('customer_contact');
            $table->string('customer_insEst');
            $table->string('customer_insMun');
            $table->integer('segment_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('segment_id')->references('segment_id')->on('segment');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custumer');
    }
};
