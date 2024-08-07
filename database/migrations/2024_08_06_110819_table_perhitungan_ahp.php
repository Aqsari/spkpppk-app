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
        Schema::create('tableahpsatuses', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->double('criteria1');
            $table->double('criteria2');
            $table->double('criteria3');
            $table->double('criteria4');
            $table->timestamps();
        });

        Schema::create('tableahpduas', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->double('criteria1');
            $table->double('criteria2');
            $table->double('criteria3');
            $table->double('criteria4');
            $table->double('jumlah');
            $table->double('prioritas');
            $table->double('eigenvalue');
            $table->timestamps();
        });

        Schema::create('tableahptigas', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->double('value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tableahpsatuses');
        Schema::dropIfExists('tableahpduas');
        Schema::dropIfExists('tableahptigas');
    }
};
