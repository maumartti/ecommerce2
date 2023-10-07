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

            $table->string('filtersColors')->nullable();
            $table->string('filtersKilos')->nullable();
            $table->string('filtersSize')->nullable();
            $table->string('filtersPrices')->nullable();
            $table->string('filtersTags')->nullable();
            table->tinyInteger('useFilterColors')->length(1)->default(0);
            table->tinyInteger('useFilterKilos')->length(1)->default(0);
            table->tinyInteger('useFilterPrices')->length(1)->default(0);
            table->tinyInteger('useFilterSizes')->length(1)->default(0);
            table->tinyInteger('useFilterTags')->length(1)->default(0);

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

            $table->string('colorPretitleRotor1',8)->nullable();
            $table->string('fontPretitleRotor1')->nullable();
            $table->string('colorTitleRotor1',8)->nullable();
            $table->string('fontTitleRotor1')->nullable();
            $table->string('colorBtnTextRotor1',8)->nullable();
            $table->string('fontBtnTextRotor1')->nullable();
            $table->string('backgroundBtnTextRotor1',8)->nullable();

            $table->string('colorPretitleRotor2',8)->nullable();
            $table->string('fontPretitleRotor2')->nullable();
            $table->string('colorTitleRotor2',8)->nullable();
            $table->string('fontTitleRotor2')->nullable();
            $table->string('colorBtnTextRotor2',8)->nullable();
            $table->string('fontBtnTextRotor2')->nullable();
            $table->string('backgroundBtnTextRotor2',8)->nullable();

            $table->string('colorPretitleRotor3',8)->nullable();
            $table->string('fontPretitleRotor3')->nullable();
            $table->string('colorTitleRotor3',8)->nullable();
            $table->string('fontTitleRotor3')->nullable();
            $table->string('colorBtnTextRotor3',8)->nullable();
            $table->string('fontBtnTextRotor3')->nullable();
            $table->string('backgroundBtnTextRotor3',8)->nullable();

            $table->string('address',128)->nullable();
            $table->string('countryCode',20)->nullable();
            $table->string('cel',20)->nullable();
            $table->string('email',128)->nullable();
            $table->string('facebook',128)->nullable();
            $table->string('instagram',128)->nullable();
            $table->string('google',128)->nullable();
            $table->string('tiktok',128)->nullable();
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
