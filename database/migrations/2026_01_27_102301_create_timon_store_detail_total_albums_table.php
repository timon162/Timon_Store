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
        Schema::create('timon_store_detail_total_albums', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('album_product_id');
            $table->unsignedBigInteger('total_album_id');
            $table->timestamps();

            $table->foreign('album_product_id')->references('id')->on('timon_store_album_products')->onDelete('cascade');
            $table->foreign('total_album_id')->references('id')->on('timon_store_total_albums')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timon_store_detail_total_albums');
    }
};
