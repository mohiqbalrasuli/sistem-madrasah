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
        Schema::create('table_fan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_Fan');
            $table->string('nama_kitab');
            $table->foreignId('kelas_id')->constrained('table_kelas');
            $table->foreignId('guru_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_fan');
    }
};
