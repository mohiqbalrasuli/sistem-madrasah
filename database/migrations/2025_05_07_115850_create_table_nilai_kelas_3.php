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
        Schema::create('table_nilai_kelas_3', function (Blueprint $table) {
            $table->id();
            $table->foreignId('induk_id')->constrained('table_murid');
            $table->foreignId('murid_id')->constrained('table_murid');
            $table->foreignId('kelas_id')->constrained('table_kelas');
            $table->integer('fiqih');
            $table->integer('tauhid');
            $table->integer('tajwid');
            $table->integer('shorrof');
            $table->integer('ilal');
            $table->integer('tarekh');
            $table->integer('akhlaq');
            $table->integer('imla');
            $table->integer('q_quran');
            $table->integer('q_kitab');
            $table->integer('muhafadhah');
            $table->integer('p_sholat');
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
        Schema::dropIfExists('table_nilai_kelas_3');
    }
};
