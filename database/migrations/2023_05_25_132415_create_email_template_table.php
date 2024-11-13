<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmailTemplateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('email_template', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', 50);
			$table->string('slug', 50);
			$table->string('from_name', 250);
			$table->string('from_email', 250);
			$table->string('subject', 250);
			$table->text('content', 16777215);
			$table->timestamps();
			$table->softDeletes();
			$table->integer('created_by')->unsigned()->index('created_by');
			$table->integer('updated_by')->unsigned()->index('updated_by');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('email_template');
	}

}
