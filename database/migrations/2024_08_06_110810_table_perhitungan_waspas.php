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
        Schema::create('tablewaspasnolaibobot', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->double('nilai');
            $table->timestamps();
        });

        Schema::create('tablewaspasalternatif', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->double('criteria1');
            $table->double('criteria2');
            $table->double('criteria3');
            $table->double('criteria4');
            $table->timestamps();
        });

        Schema::create('tablewaspasnormalisasidanqi', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->double('criteria1');
            $table->double('criteria2');
            $table->double('criteria3');
            $table->double('criteria4');
            $table->double('qi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tableahpsatu');
        Schema::dropIfExists('tableahpdua');
        Schema::dropIfExists('tableahptiga');
    }
};
