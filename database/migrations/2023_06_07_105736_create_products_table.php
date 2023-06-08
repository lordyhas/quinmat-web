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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('model', 50);
            $table->text('description')->nullable();
            $table->string('productType', 50);
            $table->string('employee', 100);
            $table->decimal('promotionPrice', 10, 2);
            $table->date('promotionOutdated');
            $table->integer('stock');
            $table->integer('threshold');
            $table->string('images', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->boolean('canReserve')->default(true);
            $table->decimal('price', 10, 2);
            $table->boolean('isTendency')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
