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
        Schema::create('raksts', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->timestamps();
            $table->text('title'); /* varbūt pārveidot uz tinytext */
            $table->mediumText('content');
            $table->date('date');
            $table->boolean('pin')->default(false);
            $table->text('pictures')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('raksts');
    }
};
