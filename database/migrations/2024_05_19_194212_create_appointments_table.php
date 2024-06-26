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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->string('service');
            $table->foreignId('therapist_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('location');
            $table->string('phone');
            $table->date('event_date');
            $table->time('start_time');
            $table->text('complaint');
            $table->string('status');
            $table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
