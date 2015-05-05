<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagePersonPivotTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('message_person', function(Blueprint $table)
		{
			$table->integer('message_id')->unsigned()->index();
			$table->foreign('message_id')->references('id')->on('messages')->onDelete('cascade');
			$table->integer('person_id')->unsigned()->index();
			$table->foreign('person_id')->references('id')->on('persons')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('message_person');
	}

}
