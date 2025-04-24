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
        Schema::create('board_of_directors', function (Blueprint $table) {
            $table->id();
            $table->string('no_of_director')->nullable();
            $table->string('photo')->nullable();
            $table->string('name');
            $table->string('email');
            $table->longText('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('board_of_directors');
    }
};
