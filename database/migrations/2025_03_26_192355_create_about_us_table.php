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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->text('banner_heading')->nullable();
            $table->text('banner_text')->nullable();

            $table->text('heading')->nullable();
            $table->text('sub_heading')->nullable();
            $table->text('text')->nullable();

            $table->text('heading_two')->nullable();
            
            $table->text('heading_three')->nullable();
            $table->text('sub_heading_two')->nullable();
            $table->text('text_two')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
