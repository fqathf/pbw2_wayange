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
        Schema::create('data_museum', function (Blueprint $table) {
            $table->id();
            $table->string('nama_museum');
            $table->string('daerah_museum');
            $table->string('judul_museum');
            $table->longText('isi_museum');
            $table->string('gambar_museum');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_museum');
    }
};
