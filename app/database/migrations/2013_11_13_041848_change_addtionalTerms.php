<?php

use Illuminate\Database\Migrations\Migration;

class ChangeAddtionalTerms extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// fucked up and created 'addtionalTerms' instead of 'additionalTerms' as a column
		Schema::table('offers', function ($table)
			{
			$table->renameColumn('addtionalTerms', 'additionalTerms');

			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('offers', function ($table)
			{
			$table->renameColumn('additionalTerms', 'addtionalTerms');
			});
	}

}