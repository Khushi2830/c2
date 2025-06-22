<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
   {
    Schema::create('employees', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('last_name');
        $table->string('email')->unique();
        $table->string('password');
        $table->string('phone')->unique();
        $table->string('pincode');
        $table->string('state');
        $table->string('city');
        $table->string('address');
        $table->string('description')->nullable();
        $table->string('property_type')->nullable();
        $table->boolean('status')->default(false); // for approval
        $table->timestamps();
    });
  }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
