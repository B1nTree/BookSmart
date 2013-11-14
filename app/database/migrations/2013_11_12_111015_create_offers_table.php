<?php

use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('offers', function($table)
		{
			$table->increments('id');
			$table->string('status',10);
			$table->string('offeredDate',20);
			$table->integer('guarantee');
			$table->integer('bonus');
			$table->string('technical',50);
			$table->string('mediaSupport',50);
			$table->integer('sellableCap');
			$table->integer('ageLimit');
			$table->integer('gaTicket1');
			$table->integer('gaTicket2');
			$table->string('loadIn',20);
			$table->string('doors',20);
			$table->string('setTime',20);
			$table->string('setLength',20);
			$table->string('curfew',20);
			$table->string('note',5000);
			$table->string('addtionalTerms',5000);
			$table->string('created_at',50);
			$table->string('updated_at',50);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('offers');
	}

}