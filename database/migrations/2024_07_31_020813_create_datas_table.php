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
        Schema::create('datas', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // Unique identifier for each record
            $table->integer('UMUR'); // Age
            $table->integer('LAMA_HONOR'); // Length of Honor
            $table->string('JABATAN'); // Position
            $table->string('PENDIDIKAN'); // Education
            $table->string('JURUSAN'); // Major
            $table->timestamps();
        });

        Schema::create('alternatives', function (Blueprint $table) {
            $table->id();
            $table->string('alternative_name')->unique();
            $table->double('criteria1');
            $table->double('criteria2');
            $table->double('criteria3');
            $table->double('criteria4');
            $table->timestamps();
        });

        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('criteria1');
            $table->string('criteria2');
            $table->string('criteria3');
            $table->string('criteria4');
            $table->string('rank');
            $table->string('status');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datas');
        Schema::dropIfExists('alternatives');
        Schema::dropIfExists('results');
    }
};
