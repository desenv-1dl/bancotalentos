<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLogonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('logon', function(Blueprint $table)
		{
			$table->foreign('pessoa_id', 'logon_pessoa_id_fkey')->references('id')->on('pessoa')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('logon', function(Blueprint $table)
		{
			$table->dropForeign('logon_pessoa_id_fkey');
		});
	}

}
