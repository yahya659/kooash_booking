<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //الحجوزات
    public function up(): void
    {

        Schema::create('bookings', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained()->onDelete('cascade');
                $table->foreignId('kosha_id')->constrained('koshes')->onDelete('cascade');
                $table->date('date');
                $table->enum('status', ['pending', 'accepted', 'rejected'])->default('pending');//pending → لم يتم الموافقة بعد  accepted → تم الموافقة عليه  rejected → تم رفضه
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
