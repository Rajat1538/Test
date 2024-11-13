<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTitlesToTextInThirdPartyManufacturingBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('third_party_manufacturing_banner', function (Blueprint $table) {
            $table->text('title')->nullable()->change();
            $table->text('manufacturing_title')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('third_party_manufacturing_banner', function (Blueprint $table) {
            $table->string('title')->nullable()->change();
            $table->string('manufacturing_title')->nullable()->change();
        });
    }
}
