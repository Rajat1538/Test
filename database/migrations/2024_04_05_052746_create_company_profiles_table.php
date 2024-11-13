<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('banner_image')->nullable();
            $table->string('banner_title')->nullable();
            $table->text('banner_description')->nullable();

            $table->string('about_pchpl_title')->nullable();
            $table->text('about_pchpl_description')->nullable();

            $table->string('video_url')->nullable();

            $table->string('mission_image')->nullable();
            $table->string('mission_title')->nullable();
            $table->string('mission_button_title')->nullable();
            $table->string('mission_button_url')->nullable();
            $table->text('mission_description')->nullable();

            $table->string('vision_image')->nullable();
            $table->string('vision_title')->nullable();
            $table->string('vision_button_title')->nullable();
            $table->string('vision_button_url')->nullable();
            $table->text('vision_description')->nullable();

            $table->string('we_believe_title')->nullable();
            $table->string('we_believe_image')->nullable();
            $table->text('we_believe_description')->nullable();
            
            $table->string('achievements_title')->nullable();
            $table->string('achievements_button_title')->nullable();
            $table->string('achievements_button_url')->nullable();

            $table->string('directors_title')->nullable();

            $table->string('trusted_partners_title')->nullable();
            $table->text('trusted_partners_description')->nullable();
            
            $table->string('division_sister_concerns_title')->nullable();
            $table->string('products_title')->nullable();
            $table->string('pchpl_team_title')->nullable();

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
        Schema::dropIfExists('company_profiles');
    }
}
