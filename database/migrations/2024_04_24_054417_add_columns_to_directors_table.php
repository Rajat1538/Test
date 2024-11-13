<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToDirectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('directors', function (Blueprint $table) {
            $table->text('description')->nullable()->after('name');
            $table->string('fb_link')->nullable()->after('description');
            $table->string('insta_link')->nullable()->after('fb_link');
            $table->string('twitter_link')->nullable()->after('insta_link');
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
            $table->dropColumn(['description', 'fb_link', 'insta_link', 'twitter_link']);
        });
    }
}
