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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('sales')->length(11)->default(0);
            $table->string('name');
            $table->string('code',6)->unique();
            $table->string('url',100);
            $table->string('price',11);
            $table->string('price_old',11)->nullable();
            $table->string('image1',36);
            $table->string('image2',36)->nullable();
            $table->string('image3',36)->nullable();
            $table->string('image4',36)->nullable();
            $table->string('image5',36)->nullable();
            $table->string('image6',36)->nullable();
            $table->string('description')->nullable();
            $table->string('origen',36)->nullable();
            $table->string('descount',10)->nullable();
            $table->string('kilos',20)->nullable();
            $table->string('color',20)->nullable();
            $table->string('size',10)->nullable();
            $table->integer('stock')->length(11)->default(0);
            $table->integer('likes')->length(11)->default(0);
            $table->integer('views')->length(11)->default(0);
            $table->tinyInteger('promo')->length(1)->default(0);
            $table->tinyInteger('new')->length(1)->default(1);
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('subcategory_id')->nullable();
            $table->unsignedInteger('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
