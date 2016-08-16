<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tat', function(Blueprint $table)
		{
			$table->foreign('pessoa_id', 'tat_pessoa_id_fkey')->references('id')->on('pessoa')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tat', function(Blueprint $table)
		{
			$table->dropForeign('tat_pessoa_id_fkey');
		});
	}

}
