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
        Schema::create('objekts', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->timestamps();
            $table->text('title');
            $table->mediumText('description');
            $table->date('finish_date');
            $table->tinyText('coordinates');
            $table->text('files')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('objekts');
    }
};
