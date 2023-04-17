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
        Schema::create('doctor_contacts', function (Blueprint $table) {
            $table->id();
            $table->string("first_name")->nullable();
            $table->string("middle_name")->nullable();
            $table->string("last_name")->nullable();
            $table->string("hospital")->nullable();
            $table->string("location")->nullable();
            $table->string("speciality")->nullable();
            $table->boolean("is_doctor")->default(false);
            $table->dateTime("last_update")->default(date('Y-m-d H:i:s'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_contacts');
    }
};
