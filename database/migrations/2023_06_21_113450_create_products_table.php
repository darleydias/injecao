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
        Schema::create('product', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('product_name');
            $table->text('product_desc');
            $table->text('product_cod');
            $table->integer('productType_id')->unsigned();
            $table->double('product_weight');
            $table->string('product_unid');   
            $table->timestamps();

            $table->foreign('productType_id')->references('productType_id')->on('productType');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
