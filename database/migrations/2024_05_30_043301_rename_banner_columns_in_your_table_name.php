<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameBannerColumnsInYourTableName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('latest_news', function (Blueprint $table) {
            $table->renameColumn('image', 'banner_image');
            $table->renameColumn('title', 'banner_title');
            $table->renameColumn('description', 'banner_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('latest_news', function (Blueprint $table) {
            $table->renameColumn('banner_image', 'image');
            $table->renameColumn('banner_title', 'title');
            $table->renameColumn('banner_description', 'description');
        });
    }
}
