<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('booked_courts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained(
                table: 'bookings',
            )->onDelete('cascade');;
            $table->foreignId('court_id')->constrained(
                table: 'courts',
            )->onDelete('cascade');;
            $table->time('start');
            $table->time('end');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookedcourts');
    }
};
