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
        Schema::create('flights', function (Blueprint $table) {
           $table->id();
            $table->string('airline');
            $table->string('departure_airport_code');
            $table->string('departure_airport_name');
            $table->string('arrival_airport_code');
            $table->string('arrival_airport_name');
            $table->decimal('price', 8, 2);
            $table->date('departure_date');
            $table->date('arrival_date');
            $table->string('class'); // e.g., economy, business
            $table->integer('available_seats');
            $table->string('image')->nullable(); // flight image URL
            $table->integer('passengers')->default(1); // max passengers allowed in one booking
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
