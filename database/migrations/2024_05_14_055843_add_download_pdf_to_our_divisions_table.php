<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDownloadPdfToOurDivisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('our_divisions', function (Blueprint $table) {
            $table->string('download_pdf')->nullable()->after('division_link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('our_divisions', function (Blueprint $table) {
            $table->dropColumn('download_pdf');
        });
    }
}
