<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPessoaCondecoracaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pessoa_condecoracao', function(Blueprint $table)
		{
			$table->foreign('pessoa_id', 'pessoa_condecoracao_pessoa_id_fkey')->references('id')->on('pessoa')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('condecoracao_id', 'pessoa_condecoracao_condecoracao_id_fkey')->references('id')->on('condecoracao')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pessoa_condecoracao', function(Blueprint $table)
		{
			$table->dropForeign('pessoa_condecoracao_pessoa_id_fkey');
			$table->dropForeign('pessoa_condecoracao_condecoracao_id_fkey');
		});
	}

}
