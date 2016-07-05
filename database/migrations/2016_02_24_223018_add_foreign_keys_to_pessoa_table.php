<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPessoaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pessoa', function(Blueprint $table)
		{
			$table->foreign('nivel_funcional_id', 'pessoa_nivel_funcional_id_fkey')->references('id')->on('nivel_funcional')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('organizacao_id', 'pessoa_organizacao_id_fkey')->references('id')->on('organizacao')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('genero_id', 'pessoa_genero_id_fkey')->references('id')->on('genero')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('formacao_id', 'pessoa_formacao_id_fkey')->references('id')->on('formacao')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('bairro_id', 'pessoa_bairro_id_fkey')->references('id')->on('bairro')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('municipio_id', 'pessoa_municipio_id_fkey')->references('id')->on('municipio')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pessoa', function(Blueprint $table)
		{
			$table->dropForeign('pessoa_nivel_funcional_id_fkey');
			$table->dropForeign('pessoa_organizacao_id_fkey');
			$table->dropForeign('pessoa_genero_id_fkey');
			$table->dropForeign('pessoa_formacao_id_fkey');
			$table->dropForeign('pessoa_bairro_id_fkey');
			$table->dropForeign('pessoa_municipio_id_fkey');
		});
	}

}
