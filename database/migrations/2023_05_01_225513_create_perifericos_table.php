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
        Schema::create('perifericos', function (Blueprint $table) {
            $table->id();
            $table->string('periferico');
            $table->string('marca');
            $table->integer('serial');
            $table->foreignId('computer_id')->nullable()->constrained('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perifericos');
    }
};
