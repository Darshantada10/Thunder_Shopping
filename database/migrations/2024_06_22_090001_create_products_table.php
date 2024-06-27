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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('brand_id');
            // $table->unsignedBigInteger('b_id');
            // $table->unsignedBigInteger('bid');
            // $table->unsignedBigInteger('brand_ka_refference');
            // $table->unsignedBigInteger('kuch_bhi');

            $table->json('product_data');

            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            // $table->foreign('b_id')->references('id')->on('brands')->onDelete('cascade');
            // $table->foreign('bid')->references('id')->on('brands')->onDelete('cascade');
            // $table->foreign('brand_ka_referrence')->references('id')->on('brands')->onDelete('cascade');
            // $table->foreign('kuch_bhi')->references('id')->on('brands')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
