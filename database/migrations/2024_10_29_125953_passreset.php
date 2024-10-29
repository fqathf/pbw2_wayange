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
        Schema::create('passreset', function (Blueprint $table) {
            $table->id('passResetId');
            $table->text('passResetEmail');
            $table->text('passResetSelector');
            $table->longText('passResetToken');
            $table->text('passResetExpires');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passreset');
    }
};
