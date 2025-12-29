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
            $table->tinytext('title');
            $table->mediumText('content');
            $table->date('date');
            $table->text('pictures')->nullable();
            $table->text('type');
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
