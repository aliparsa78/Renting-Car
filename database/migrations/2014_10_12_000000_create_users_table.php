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
            $table->char('firstname',32);
            $table->char('lastname',32);
            $table->char('email',64)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->char('mobile',16)->nullable();
            $table->char('id_number',32)->nullable();
            $table->string('password');
            $table->char('user_type',8)->default('user');
            $table->char('profile_path',65)->nullable();
            $table->char('job',65)->nullable();
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
