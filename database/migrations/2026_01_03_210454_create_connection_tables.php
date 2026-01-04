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
        Schema::create('image_raksts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('image_id');
            $table->unsignedBigInteger('raksts_id');
            $table->foreign('image_id')->references('id')->on('images');
            $table->foreign('raksts_id')->references('id')->on('raksts');
        });
        
        Schema::create('image_objekts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('image_id');
            $table->unsignedBigInteger('objekts_id');
            $table->foreign('image_id')->references('id')->on('images');
            $table->foreign('objekts_id')->references('id')->on('objekts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image_raksts');
        Schema::dropIfExists('image_objekts');
    }
};
