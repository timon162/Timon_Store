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
        Schema::create('timon_store_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_name');
            $table->string('product_code');
            $table->unsignedBigInteger('supplier_id');
            $table->unsignedBigInteger('category_style_id');
            $table->string('product_status');
            $table->decimal('product_price', 16, 0);
            $table->text('product_description')->nullable();
            $table->text('product_image');
            $table->unsignedInteger('product_quantity');
            $table->boolean('is_hot');
            $table->timestamps();

            $table->foreign('supplier_id')->references('id')->on('timon_store_suppliers')->onDelete('cascade');
            $table->foreign('category_style_id')->references('id')->on('timon_store_category_styles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timon_store_products');
    }
};
