<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('timon_store_set_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('set_product_name');
            $table->text('set_product_image');
            $table->decimal('set_product_price');
            $table->unsignedInteger('set_product_quantity');
            $table->string('set_product_status');
            $table->boolean('set_product_gender');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timon_store_set_products');
    }
};
