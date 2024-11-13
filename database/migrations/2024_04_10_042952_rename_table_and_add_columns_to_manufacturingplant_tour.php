<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameTableAndAddColumnsToManufacturingplantTour extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('manufacturingplant_tour_banners', 'manufacturingplant_tour');

        Schema::table('manufacturingplant_tour', function (Blueprint $table) {
            $table->string('address_iframe')->nullable();
            $table->string('address')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('website')->nullable();
            $table->string('email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('manufacturingplant_tour', function (Blueprint $table) {
            $table->dropColumn('address_iframe');
            $table->dropColumn('address');
            $table->dropColumn('phone_no');
            $table->dropColumn('website');
            $table->dropColumn('email');
        });

        Schema::rename('manufacturingplant_tour', 'manufacturingplant_tour_banners');
    }
}
