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
            $table->string('nisn')->unique()->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->enum('jenis_kelamin', ['Laki - laki', 'Perempuan'])->nullable();
            $table->string('nama_sekolah')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('no_telp_ayah')->nullable();
            $table->string('no_telp_ibu')->nullable();
            $table->string('password');
            $table->enum('role', ['admin', 'student'])->default('student');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('sessions');
    }
};