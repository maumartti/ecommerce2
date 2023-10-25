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
            $table->string('type');
            $table->string('name');
            $table->string('company',20)->nullable();
            $table->string('address',255)->nullable();
            $table->string('city',64)->nullable();
            $table->string('zip',12)->nullable();
            $table->string('countryCode',20)->nullable();
            $table->string('cel',20)->nullable();
            $table->string('image',20)->nullable();
            $table->string('email')->unique();
            $table->tinyInteger('active')->length(1)->default(1);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
