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
        Schema::create('table_jadwal', function (Blueprint $table) {
            $table->id();
            $table->string('hari');
            $table->enum('jam',['14:00-15:00 WIB','15:30-16:20 WIB']);
            $table->foreignId('fan_id')->constrained('table_fan');
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
        Schema::dropIfExists('table_jadwal');
    }
};
