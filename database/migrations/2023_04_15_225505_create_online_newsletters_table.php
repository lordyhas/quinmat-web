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
        Schema::create('online_newsletters', function (Blueprint $table) {
            $table->id();
            $table->string("email")->unique();
            $table->string("first_name")->nullable();
            $table->string("last_name")->nullable();
            $table->boolean("is_blocked")->default(false);
            $table->boolean("unsubscribe")->default(false);
            $table->dateTime("subscribe_date")->default(date('Y-m-d H:i:s'));
            $table->dateTime("unsubscribe_date")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('online_newsletters');
    }
};
