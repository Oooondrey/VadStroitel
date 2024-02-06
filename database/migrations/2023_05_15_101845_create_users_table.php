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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fio')->default('Null');
            $table->string('login')->default('Null');
            $table->string('password');
            $table->string('email')->default('Null')->unique();
            $table->string('phone')->default('Null');
            $table->string('role')->default(0);
            $table->foreignIdFor(\App\Models\Vacancy::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
