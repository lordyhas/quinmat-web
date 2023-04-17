<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('online_messages', function (Blueprint $table) {
            $table->id();
            $table->string("email");
            $table->string("user_name");
            $table->string("message")->nullable();
            $table->dateTime("time")->default(date('Y-m-d H:i:s'));
            $table->boolean("is_read")->default(false);
            $table->boolean("is_block")->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('online_messages');
    }

};

