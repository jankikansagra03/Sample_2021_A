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
        Schema::create('registration', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 50)->nullable(false);
            $table->string('email', 50)->nullable(false)->unique();
            $table->string('password', 20)->nullable(false);
            $table->integer('mobile')->nullable(false);
            $table->string('pic', 200)->nullable(false)->default('default.png');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registration');
    }
};
