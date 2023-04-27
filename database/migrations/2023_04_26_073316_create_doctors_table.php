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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string("first_name")->nullable();
            $table->string("middle_name")->nullable();
            $table->string("last_name")->nullable();
            $table->string("sex");
            $table->string("hospital");
            $table->unsignedBigInteger("hospital_id")->nullable();
            $table->foreign('hospital_id')->references('id')->on('hospitals');
            $table->string("location");
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
        Schema::dropIfExists('doctors');
    }
};
