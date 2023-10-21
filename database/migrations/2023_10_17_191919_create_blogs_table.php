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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('image',20);
            $table->string('title',100);
            $table->string('url');
            $table->string('cita',160);
            $table->text('text');
            $table->string('tags')->nullable();
            $table->integer('category_blog_id')->length(11)->nullable();
            $table->tinyInteger('active')->length(1)->default(1);
            $table->unsignedInteger('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
