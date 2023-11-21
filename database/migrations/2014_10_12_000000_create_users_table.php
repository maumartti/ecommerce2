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
            $table->string('name',26);
            $table->string('email')->unique();
            $table->string('image',22)->nullable();
            $table->string('rut',20)->nullable();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->tinyInteger('type_id')->length(1)->default(1);
            $table->tinyInteger('active')->length(1)->default(1);
            $table->string('company',20)->nullable();
            $table->string('address',255)->nullable();
            $table->string('city',64)->nullable();
            $table->string('zip',12)->nullable();
            $table->string('countryCode',10)->nullable();
            $table->string('cel',20)->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes(); // Agrega esta línea para habilitar eliminación suave
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
