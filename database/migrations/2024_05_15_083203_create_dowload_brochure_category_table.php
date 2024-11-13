<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDowloadBrochureCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dowload_brochure_category', function (Blueprint $table) {
            $table->id();
            $table->string('category')->nullable();
            $table->string('pdf')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0 = Inactive, 1 = Active');
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
        Schema::dropIfExists('dowload_brochure_category');
    }
}
