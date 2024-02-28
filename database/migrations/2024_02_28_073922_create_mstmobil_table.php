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
        Schema::create('mstmobil', function (Blueprint $table) {
            $table->string('fidmobil');
            $table->string('fmerek');
            $table->string('fmodel');
            $table->string('fnoplat');
            $table->string('ftarif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mstmobil');
    }
};
