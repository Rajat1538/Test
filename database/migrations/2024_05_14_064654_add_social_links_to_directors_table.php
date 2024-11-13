<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSocialLinksToDirectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('directors', function (Blueprint $table) {
            $table->string('linkedin_link', 255)->nullable()->after('twitter_link');
            $table->string('youtube_link', 255)->nullable()->after('linkedin_link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('directors', function (Blueprint $table) {
            $table->dropColumn('linkedin_link');
            $table->dropColumn('youtube_link');
        });
    }
}
