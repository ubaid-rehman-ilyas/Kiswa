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
        Schema::create('contactpage', function (Blueprint $table) {
            $table->id();
            $table->string('heading')->nullable();
            $table->text('banner_heading')->nullable();
            $table->string('sub_heading')->nullable();
            $table->string('section_one_heading')->nullable();
            $table->string('form_heading')->nullable();
            $table->string('form_heading_two')->nullable();
            $table->string('form_heading_three')->nullable();
            $table->string('form_heading_four')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactpage');
    }
};
