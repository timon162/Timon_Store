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
        Schema::create('timon_store_detail_set_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('set_product_id');
            $table->unsignedBigInteger('product_id');
            $table->timestamps();

            $table->foreign('set_product_id')->references('id')->on('timon_store_set_products')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('timon_store_products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timon_store_detail_set_products');
    }
};
