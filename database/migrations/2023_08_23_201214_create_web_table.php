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
            $table->string('imageLogo',22)->nullable();
            $table->string('imageRotor1',22)->nullable();
            $table->string('imageRotor2',22)->nullable();
            $table->string('imageRotor3',22)->nullable();
            $table->string('imageRotor4',22)->nullable();
            $table->string('imageRotor5',22)->nullable();

            $table->string('filtersColors')->nullable();
            $table->string('filtersKilos')->nullable();
            $table->string('filtersSize')->nullable();
            $table->string('filtersPrices')->nullable();
            $table->string('filtersTags')->nullable();
            $table->tinyInteger('useFilterColors')->length(1)->default(0);
            $table->tinyInteger('useFilterKilos')->length(1)->default(0);
            $table->tinyInteger('useFilterPrices')->length(1)->default(0);
            $table->tinyInteger('useFilterSizes')->length(1)->default(0);
            $table->tinyInteger('useFilterTags')->length(1)->default(0);

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
            $table->string('pretitleRotor4',36)->nullable();
            $table->string('titleRotor4',36)->nullable();
            $table->string('btnTextRotor4',22)->nullable();
            $table->string('btnUrlRotor4')->nullable();
            $table->string('pretitleRotor5',36)->nullable();
            $table->string('titleRotor5',36)->nullable();
            $table->string('btnTextRotor5',22)->nullable();
            $table->string('btnUrlRotor5')->nullable();
            $table->tinyInteger('useBtnRotor1')->length(1)->default(0);
            $table->tinyInteger('useBtnRotor2')->length(1)->default(0);
            $table->tinyInteger('useBtnRotor3')->length(1)->default(0);
            $table->tinyInteger('useBtnRotor4')->length(1)->default(0);
            $table->tinyInteger('useBtnRotor5')->length(1)->default(0);

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

            $table->string('colorPretitleRotor4',8)->nullable();
            $table->string('fontPretitleRotor4')->nullable();
            $table->string('colorTitleRotor4',8)->nullable();
            $table->string('fontTitleRotor4')->nullable();
            $table->string('colorBtnTextRotor4',8)->nullable();
            $table->string('fontBtnTextRotor4')->nullable();
            $table->string('backgroundBtnTextRotor4',8)->nullable();

            $table->string('colorPretitleRotor5',8)->nullable();
            $table->string('fontPretitleRotor5')->nullable();
            $table->string('colorTitleRotor5',8)->nullable();
            $table->string('fontTitleRotor5')->nullable();
            $table->string('colorBtnTextRotor5',8)->nullable();
            $table->string('fontBtnTextRotor5')->nullable();
            $table->string('backgroundBtnTextRotor5',8)->nullable();

            $table->string('address',128)->nullable();
            $table->string('countryCode',20)->nullable();
            $table->string('cel',20)->nullable();
            $table->string('email',128)->nullable();
            $table->string('facebook',128)->nullable();
            $table->string('instagram',128)->nullable();
            $table->string('google',128)->nullable();
            $table->string('tiktok',128)->nullable();

            $table->string('imageContact',22)->nullable();
            $table->string('imageblog',22)->nullable();

            $table->string('imageAbout',22)->nullable();
            $table->string('aboutTitle',64)->nullable();
            $table->string('aboutTitleText1',100)->nullable();
            $table->string('aboutImageText1',22)->nullable();
            $table->text('aboutText1')->nullable();
            $table->string('aboutTitleText2',100)->nullable();
            $table->string('aboutImageText2',22)->nullable();
            $table->text('aboutText2')->nullable();
            
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
