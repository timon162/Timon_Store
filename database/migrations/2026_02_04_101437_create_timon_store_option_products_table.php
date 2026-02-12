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
        Schema::create('timon_store_option_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('option_type');
            $table->string('option_name');
            $table->decimal('option_price', 16, 0);
            $table->unsignedBigInteger('product_id');

            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('timon_store_products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timon_store_option_products');
    }
};
