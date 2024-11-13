<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCompanyBackgroundTitleToCompanyBackgroundProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('company_background_products', function (Blueprint $table) {
            $table->string('company_background_title')->after('id'); // Add company_background_title field
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
            $table->dropColumn('company_background_title');
        });
    }
}
