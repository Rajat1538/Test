<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserTrackingToOurProductImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('our_product_images', function (Blueprint $table) {
            $table->string('category')->nullable()->after('status');
            $table->string('mrp')->nullable()->after('category');
            $table->string('ptr')->nullable()->after('mrp');
            $table->string('pts')->nullable()->after('ptr');
            $table->text('composition')->nullable()->after('pts');
            $table->string('label_2')->nullable()->after('composition');
            $table->text('product_description')->nullable()->after('label_2');
            $table->text('product_side_effect')->nullable()->after('product_description');
            $table->text('product_indication')->nullable()->after('product_side_effect');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('our_product_images', function (Blueprint $table) {
            Schema::table('our_product_images', function (Blueprint $table) {
                $table->dropColumn(['category', 'mrp', 'ptr', 'pts', 'composition', 'label_2', 'product_description', 'product_side_effect', 'product_indication']);
            });
        });
    }
}
