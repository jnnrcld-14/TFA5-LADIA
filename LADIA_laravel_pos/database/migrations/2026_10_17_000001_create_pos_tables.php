<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); $table->string('username', 50)->unique(); $table->string('full_name', 100);
            $table->string('email', 100); $table->string('password'); $table->string('avatar')->nullable();
            $table->rememberToken(); $table->timestamps();
        });
        Schema::create('customers', function (Blueprint $table) { $table->id(); $table->string('full_name', 100); $table->string('email', 100); $table->timestamp('created_at')->useCurrent(); });
        Schema::create('tasks', function (Blueprint $table) { $table->id(); $table->string('title', 150); $table->string('status', 20)->default('pending'); $table->date('task_date'); $table->timestamp('created_at')->useCurrent(); });
    }
    public function down(): void { Schema::dropIfExists('tasks'); Schema::dropIfExists('customers'); Schema::dropIfExists('users'); }
};
