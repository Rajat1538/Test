<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmailLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('email_log', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('from_email', 250)->nullable();
			$table->string('from_name', 250)->nullable();
			$table->string('to_email', 250)->nullable();
			$table->string('to_name', 250)->nullable();
			$table->string('subject', 250)->nullable();
			$table->text('content', 16777215)->nullable();
			$table->boolean('is_sent')->default(0);
			$table->dateTime('sent_on')->nullable();
			$table->boolean('is_read')->nullable();
			$table->dateTime('read_on')->nullable();
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
		Schema::drop('email_log');
	}

}
