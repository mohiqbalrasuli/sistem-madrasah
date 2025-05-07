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
        Schema::create('table_nilai_kelas_shifir_b', function (Blueprint $table) {
            $table->id();
            $table->foreignId('induk_id')->constrained('table_murid');
            $table->foreignId('murid_id')->constrained('table_murid');
            $table->foreignId('kelas_id')->constrained('table_kelas');
            $table->integer('membaca');
            $table->integer('menulis');
            $table->integer('pego');
            $table->integer('b_arab');
            $table->integer('q_quran');
            $table->integer('p_sholat');
            $table->integer('doa');
            $table->integer('jumlah_pokok');
            $table->decimal('rata_pokok');
            $table->integer('jumlah_non_pokok');
            $table->decimal('rata_non_pokok');
            $table->integer('jumlah_semua');
            $table->decimal('rata_semua');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_nilai_kelas_shifir_b');
    }
};
