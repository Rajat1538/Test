<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToBlogPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blog_pages', function (Blueprint $table) {
            //
            $table->string('blog_list_banner_image')->nullable();
            $table->text('blog_list_banner_title')->nullable();
            $table->text('blog_list_banner_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blog_pages', function (Blueprint $table) {
            //
        });
    }
}
