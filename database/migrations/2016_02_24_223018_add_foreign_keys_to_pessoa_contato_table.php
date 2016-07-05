<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPessoaContatoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pessoa_contato', function(Blueprint $table)
		{
			$table->foreign('pessoa_id', 'pessoa_contato_pessoa_id_fkey')->references('id')->on('pessoa')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('contato_id', 'pessoa_contato_contato_id_fkey')->references('id')->on('contato')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pessoa_contato', function(Blueprint $table)
		{
			$table->dropForeign('pessoa_contato_pessoa_id_fkey');
			$table->dropForeign('pessoa_contato_contato_id_fkey');
		});
	}

}
