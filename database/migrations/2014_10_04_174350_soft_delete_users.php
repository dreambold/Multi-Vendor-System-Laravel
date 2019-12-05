<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SoftDeleteUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Update the users table
		Schema::table('users', function(Blueprint $table)
		{
			//
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
		// Update the users table
		Schema::table('users', function(Blueprint $table)
		{
			$table->dropSoftDeletes();
			
		});
	}

}
