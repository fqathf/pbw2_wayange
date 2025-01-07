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
        Schema::create('history_wayang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_a');
            $table->unsignedBigInteger('id_w');
            $table->timestamps();
    
            $table->foreign('id_a')->references('id')->on('akun')->onDelete('cascade');
            $table->foreign('id_w')->references('id')->on('data_wayang')->onDelete('cascade');
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
