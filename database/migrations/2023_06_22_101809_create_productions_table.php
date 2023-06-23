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
        Schema::create('production', function (Blueprint $table) {
            $table->increments('production_id');
            $table->integer('product_id')->unsigned();
            $table->string('production_opNum');
            $table->date('production_deliveryDate');
            $table->text('production_obs');
            $table->integer('customer_id')->unsigned();
            $table->timestamps();

            $table->foreign('product_id')->references('product_id')->on('product');
            $table->foreign('customer_id')->references('customer_id')->on('customer');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('production');
    }
};
