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
        Schema::create('branch_responsibles', function (Blueprint $table) {
            $table->id();
            $table->string('branch_name')->nullable();
            $table->string('photo')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('contact_no');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branch_responsibles');
    }
};
