<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMunicipioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('municipio', function(Blueprint $table)
		{
			$table->foreign('unidade_federacao_id', 'municipio_unidade_federacao_id_fkey')->references('id')->on('unidade_federacao')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('municipio', function(Blueprint $table)
		{
			$table->dropForeign('municipio_unidade_federacao_id_fkey');
		});
	}

}
