<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyProfileCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_profile_certificates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_profile_id')->constrained('company_profiles')->onDelete('cascade');
            $table->foreignId('manage_cerificate_id')->constrained('manage_cerificates')->onDelete('cascade');
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
        Schema::dropIfExists('company_profile_certificates');
    }
}
