<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->text('permissions')->nullable();
			$table->timestamp('last_login')->nullable();
			$table->timestamp('active')->nullable();
			$table->string('activation_key',255)->nullable();

			//https://github.com/Propaganistas/Laravel-Phone/issues/69
			$table->string('phone', 36)->nullable();
			$table->string('phone_country_code', 2)->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{

	}

}
