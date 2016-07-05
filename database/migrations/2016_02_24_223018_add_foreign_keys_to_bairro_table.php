<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBairroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bairro', function(Blueprint $table)
		{
			$table->foreign('municipio_id', 'bairro_municipio_id_fkey')->references('id')->on('municipio')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('bairro', function(Blueprint $table)
		{
			$table->dropForeign('bairro_municipio_id_fkey');
		});
	}

}
