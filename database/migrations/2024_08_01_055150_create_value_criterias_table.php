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
        Schema::create('value_criterias', function (Blueprint $table) {
            $table->id();
            $table->string('criteria_name')->unique();
            $table->double('criteria1');
            $table->double('criteria2');
            $table->double('criteria3');
            $table->double('criteria4');
            $table->string('costbenefit');
            $table->timestamps();
        });

        
        Schema::create('criterias', function (Blueprint $table) {
            $table->id();
            $table->string('criteria_name')->unique();
            $table->string('criteria_type');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('value_criterias');
        Schema::dropIfExists('criterias');
    }
};
