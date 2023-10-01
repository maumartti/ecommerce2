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
        Schema::create('web', function (Blueprint $table) {
            $table->id();
            $table->string('imageLogo')->nullable();
            $table->string('imageRotor1')->nullable();
            $table->string('imageRotor2')->nullable();
            $table->string('imageRotor3')->nullable();
            $table->string('pretitleRotor1',36)->nullable();
            $table->string('titleRotor1',36)->nullable();
            $table->string('btnTextRotor1',22)->nullable();
            $table->string('btnUrlRotor1')->nullable();
            $table->string('pretitleRotor2',36)->nullable();
            $table->string('titleRotor2',36)->nullable();
            $table->string('btnTextRotor2',22)->nullable();
            $table->string('btnUrlRotor2')->nullable();
            $table->string('pretitleRotor3',36)->nullable();
            $table->string('titleRotor3',36)->nullable();
            $table->string('btnTextRotor3',22)->nullable();
            $table->string('btnUrlRotor3')->nullable();
            $table->tinyInteger('useBtnRotor1')->length(1)->default(0);
            $table->tinyInteger('useBtnRotor2')->length(1)->default(0);
            $table->tinyInteger('useBtnRotor3')->length(1)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web');
    }
};
