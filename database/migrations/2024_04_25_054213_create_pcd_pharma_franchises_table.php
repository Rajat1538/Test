<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcdPharmaFranchisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcd_pharma_franchises', function (Blueprint $table) {
            $table->id();
            $table->string('banner_image')->nullable();
            $table->text('banner_title')->nullable();
            $table->text('banner_description')->nullable();

            $table->string('pharma_franchise_image')->nullable();
            $table->text('pharma_franchise_title')->nullable();
            $table->text('pharma_franchise_button_title')->nullable();
            $table->string('pharma_franchise_button_url')->nullable();
            $table->text('pharma_franchise_description')->nullable();

            $table->string('pcd_image')->nullable();
            $table->text('pcd_title')->nullable();
            $table->text('pcd_description')->nullable();
            $table->text('pcd_visit')->nullable();
            $table->string('pcd_call')->nullable();

            $table->text('journey_title')->nullable();
            $table->text('journey_customers')->nullable();
            $table->text('journey_manufacturing_facilities')->nullable();
            $table->text('journey_sku')->nullable();
            $table->text('journey_employees')->nullable();
            $table->text('journey_button_title')->nullable();
            $table->string('journey_button_url')->nullable();

            $table->string('psychocare_image')->nullable();
            $table->text('psychocare_title')->nullable();
            $table->text('psychocare_description')->nullable();

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
        Schema::dropIfExists('pcd_pharma_franchises');
    }
}
