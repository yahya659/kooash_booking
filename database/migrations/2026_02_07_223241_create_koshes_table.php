<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

//  جدول الكوش
    public function up(): void
    {
        Schema::create('koshes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2);
            $table->string('images')->nullable(); // روابط الصور
            $table->enum('status', ['available', 'unavailable'])->default('available');//available → متاح للشراء unavailable → غير متاح حالياً
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('koshes');
    }
};
