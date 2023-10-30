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
        Schema::create('user_type', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->tinyInteger('category_show')->length(1)->default(1);
            $table->tinyInteger('category_edit')->length(1)->default(1);
            $table->tinyInteger('category_delete')->length(1)->default(1);

            $table->tinyInteger('product_show')->length(1)->default(1);
            $table->tinyInteger('product_edit')->length(1)->default(1);
            $table->tinyInteger('product_delete')->length(1)->default(1);

            $table->tinyInteger('sales_show')->length(1)->default(1);
            $table->tinyInteger('sales_edit')->length(1)->default(1);
            $table->tinyInteger('sales_delete')->length(1)->default(1);purchases

            $table->tinyInteger('shipping_show')->length(1)->default(1);
            $table->tinyInteger('shipping_edit')->length(1)->default(1);
            $table->tinyInteger('shipping_delete')->length(1)->default(1);

            $table->tinyInteger('purchases_show')->length(1)->default(1);
            $table->tinyInteger('purchases_edit')->length(1)->default(1);
            $table->tinyInteger('purchases_delete')->length(1)->default(1);

            $table->tinyInteger('user_show')->length(1)->default(1);
            $table->tinyInteger('user_edit')->length(1)->default(1);
            $table->tinyInteger('user_delete')->length(1)->default(1);
            
            $table->tinyInteger('activity_show')->length(1)->default(1);
            $table->tinyInteger('activity_edit')->length(1)->default(1);
            $table->tinyInteger('activity_delete')->length(1)->default(1);

            $table->tinyInteger('profile_show')->length(1)->default(1);
            $table->tinyInteger('profile_edit')->length(1)->default(1);
            $table->tinyInteger('profile_delete')->length(1)->default(1);

            $table->tinyInteger('blog_show')->length(1)->default(1);
            $table->tinyInteger('blog_edit')->length(1)->default(1);
            $table->tinyInteger('blog_delete')->length(1)->default(1);

            $table->tinyInteger('message_show')->length(1)->default(1);
            $table->tinyInteger('message_edit')->length(1)->default(1);
            $table->tinyInteger('message_delete')->length(1)->default(1);

            $table->tinyInteger('subscriber_show')->length(1)->default(1);
            $table->tinyInteger('subscriber_edit')->length(1)->default(1);
            $table->tinyInteger('subscriber_delete')->length(1)->default(1);

            $table->tinyInteger('general_slider_show')->length(1)->default(1);
            $table->tinyInteger('general_slider_edit')->length(1)->default(1);
            $table->tinyInteger('general_slider_delete')->length(1)->default(1);
            $table->tinyInteger('general_logo_show')->length(1)->default(1);
            $table->tinyInteger('general_logo_edit')->length(1)->default(1);
            $table->tinyInteger('general_logo_delete')->length(1)->default(1);
            $table->tinyInteger('general_color_show')->length(1)->default(1);
            $table->tinyInteger('general_color_edit')->length(1)->default(1);
            $table->tinyInteger('general_color_delete')->length(1)->default(1);
            $table->tinyInteger('general_contact_show')->length(1)->default(1);
            $table->tinyInteger('general_contact_edit')->length(1)->default(1);
            $table->tinyInteger('general_contact_delete')->length(1)->default(1);
            $table->tinyInteger('general_filter_show')->length(1)->default(1);
            $table->tinyInteger('general_filter_edit')->length(1)->default(1);
            $table->tinyInteger('general_filter_delete')->length(1)->default(1);
            $table->tinyInteger('general_about_show')->length(1)->default(1);
            $table->tinyInteger('general_about_edit')->length(1)->default(1);
            $table->tinyInteger('general_about_delete')->length(1)->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_type');
    }
};
