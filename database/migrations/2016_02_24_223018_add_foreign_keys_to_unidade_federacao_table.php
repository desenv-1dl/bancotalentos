<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUnidadeFederacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('unidade_federacao', function(Blueprint $table)
		{
			$table->foreign('pais_id', 'unidade_federacao_pais_id_fkey')->references('id')->on('pais')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('unidade_federacao', function(Blueprint $table)
		{
			$table->dropForeign('unidade_federacao_pais_id_fkey');
		});
	}

}
