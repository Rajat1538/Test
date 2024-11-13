<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorporateOfficeToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporate_office_tours', function (Blueprint $table) {
            $table->id();
            $table->string('banner_image')->nullable();
            $table->text('banner_title')->nullable();
            $table->text('banner_description')->nullable();
            $table->string('welcome_video_url')->nullable();
            $table->text('welcome_title')->nullable();
            $table->text('welcome_description')->nullable();
            $table->text('office_map_iframe')->nullable();
            $table->text('office_location')->nullable();
            $table->string('office_phone')->nullable();
            $table->string('office_email')->nullable();
            $table->string('office_website')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('corporate_office_tours');
    }
}
