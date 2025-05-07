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
        Schema::create('table_alumni', function (Blueprint $table) {
            $table->id();
            $table->string('nama_alumni');
            $table->enum('gender',['laki-laki','perempuam']);
            $table->string('alamat');
            $table->foreignId('alumni_id')->constrained('table_lulusan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_alumni');
    }
};
