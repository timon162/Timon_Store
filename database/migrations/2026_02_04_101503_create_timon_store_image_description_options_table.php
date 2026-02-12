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
        Schema::create('timon_store_image_description_options', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('description_option_image');
            $table->unsignedBigInteger('option_product_id');
            $table->timestamps();

            $table->foreign('option_product_id')->references('id')->on('timon_store_option_products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timon_store_image_description_options');
    }
};
