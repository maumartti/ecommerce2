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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('code',11);
            $table->string('status',20);
            $table->unsignedInteger('amount',11);
            $table->unsignedInteger('amountTotal',11);
            $table->string('itemsId',100);
            $table->string('itemsPrices',255);
            $table->string('userName',100);
            $table->string('userRut',20)->nullable();
            $table->string('userEmail',20);
            $table->string('userCountryCode',10);
            $table->string('userCel',36);
            $table->string('userRegion',64);
            $table->string('userCity',100);
            $table->string('userZip',12);
            $table->string('userAddress',255);
            $table->string('shipping',20);
            $table->unsignedInteger('amountShipping',11)->nullable();
            $table->unsignedInteger('shippingCompanyId',11)->nullable();
            $table->string('shippingCompanyName',64)->nullable();
            $table->string('payMethod',36);
            $table->datetime('payConfirmed')->nullable()->default(null);
            $table->datetime('deliveredStart')->nullable()->default(null);
            $table->datetime('deliveredEnd')->nullable()->default(null);
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('seller_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
