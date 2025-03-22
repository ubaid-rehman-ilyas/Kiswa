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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('title')->nullable();
            $table->integer('no_of_days')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->string('rating')->nullable();
            $table->text('details')->nullable();
            $table->string('makkah_hotel')->nullable();
            $table->string('madinah_hotel')->nullable();
            $table->integer('makkah_nights')->nullable();
            $table->integer('madinah_nights')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
