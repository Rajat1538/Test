<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToCompanyBackgroundProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('company_background_products', function (Blueprint $table) {
            $table->text('title_one')->nullable();
            $table->text('title_two')->nullable();
            $table->text('title_three')->nullable();
            $table->text('title_four')->nullable();
            $table->text('image_one')->nullable();
            $table->text('image_two')->nullable();
            $table->text('image_three')->nullable();
            $table->text('image_four')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('company_background_products', function (Blueprint $table) {
            $table->dropColumn([
                'title_one',
                'title_two',
                'title_three',
                'title_four',
                'image_one',
                'image_two',
                'image_three',
                'image_four'
            ]);
        });
    }
}
