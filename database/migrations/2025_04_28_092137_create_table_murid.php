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
        Schema::create('table_murid', function (Blueprint $table) {
            $table->id();
            $table->string('ni_induk',20)->unique();
            $table->string('nama_murid');
            $table->foreignId('kelas_id')->constrained('table_kelas');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('gender',['laki-laki','perempuan']);
            $table->string('alamat');
            $table->string('no_telepon');
            $table->string('nama_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('nama_ibu');
            $table->string('pekerjaan_ibu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_murid');
    }
};
