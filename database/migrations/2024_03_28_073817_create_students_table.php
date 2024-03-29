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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('phone')->nullable(false);
            $table->tinyInteger('lesson')->nullable(false)->comment('5:N5, 4:N4, 3:N3');
            $table->tinyInteger('class')->nullable(false)->comment('1:1vs1, 2:1vs3, 3:1vs10');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
