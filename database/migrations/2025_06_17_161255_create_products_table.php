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
            $table->string(column: "title")->unique();
            $table->text("description")->nullable();
            $table->float("price");
            $table->float( "descount_price")->nullable();
            $table->boolean("status")->default(false);
            $table->foreignId("category_id")->constrained()->onDelete("CASCADE");
            $table->string("image");
            $table->string("kg");
            $table->string("veg");
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
