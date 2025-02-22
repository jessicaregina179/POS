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
        Schema::create(table: 'products', callback: function (Blueprint $table): void {
            $table->id();
            $table->string(column: 'name');
            $table->string(column: 'description')->nullable();
            $table->integer(column: 'stock');
            $table->integer(column: 'price');
            $table->foreignId(column: 'category_id')->references('id')->on('categories')->onDelete('cascade');
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
