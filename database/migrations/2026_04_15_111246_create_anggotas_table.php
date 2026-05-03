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
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nia');
            $table->enum('status', 
            [
                'Anggota Kehormatan',
                'Anggota Tetap',
                'Anggota Muda',
            ]);
            $table->string('nama_unix');
            $table->string('alamat');
            $table->string('no_telp');
            $table->foreignId('divisi_id')->constrained('divisis')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggotas');
    }
};
