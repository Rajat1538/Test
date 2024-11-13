<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeAddressIframeTypeInManufacturingplantTourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('manufacturingplant_tour', function (Blueprint $table) {
            $table->text('address_iframe')->change();
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
            $table->string('address_iframe', 255)->change();
        });
    }
}
