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
        Schema::create('data_wayang', function (Blueprint $table) {
            $table->id();
            $table->string('nama_wayang');
            $table->string('judul_wayang');
            $table->longText('isi_wayang');
            $table->string('gambar_wayang');
            $table->foreignId('id_kategori');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
