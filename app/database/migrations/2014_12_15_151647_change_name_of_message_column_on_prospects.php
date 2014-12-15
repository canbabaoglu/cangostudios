<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeNameOfMessageColumnOnProspects extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('prospects', function(Blueprint $table)
		{
			$table->renameColumn('message', 'message_body');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('prospects', function(Blueprint $table)
		{
			$table->renameColumn('message_body', 'message');
		});
	}

}
