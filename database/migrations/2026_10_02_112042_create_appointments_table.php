<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();

            // Pasien yang melakukan booking
            $table->foreignId('patient_id')
                  ->constrained('users')
                  ->cascadeOnDelete();

            // Jadwal dokter yang dipilih
            $table->foreignId('doctor_schedule_id')
                  ->constrained('doctor_schedules')
                  ->cascadeOnDelete();

            // Tanggal pemeriksaan
            $table->date('appointment_date');

            // Nomor antrean
            $table->unsignedInteger('queue_number')->nullable();

            // Status booking
            $table->string('status')->default('booked');

            $table->timestamps();

            // Satu pasien tidak bisa booking jadwal yang sama
            $table->unique(
    ['patient_id', 
    'doctor_schedule_id', 
    'appointment_date'],
    'appointment_unique'
);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};