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
        Schema::create('madrasa_registration_infos', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('user_last_name');
            $table->string('user_madrasa_name');
            $table->string('user_madrasa_type_id');
            $table->string('user_country_id');
            $table->string('user_division_id');
            $table->string('user_district_id');
            $table->string('user_thana_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('madrasa_registration_infos');
    }
};
