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
        Schema::create('trxsewa', function (Blueprint $table) {
            $table->string('fidsewa');
            $table->date('ftglawal');
            $table->date('ftglakhir');
            $table->string('fnoplat');
            $table->string('fiduser');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trxsewa');
    }
};
