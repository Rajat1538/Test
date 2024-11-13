<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorporateOfficeTourImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporate_office_tour_images', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('category')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0 = InActive, 1 = Active');
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
        Schema::dropIfExists('corporate_office_tour_images');
    }
}
