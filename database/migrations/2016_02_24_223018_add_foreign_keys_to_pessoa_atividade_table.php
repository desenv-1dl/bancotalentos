<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPessoaAtividadeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pessoa_atividade', function(Blueprint $table)
		{
			$table->foreign('pessoa_id', 'pessoa_atividade_pessoa_id_fkey')->references('id')->on('pessoa')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('modalidade_id', 'pessoa_atividade_modalidade_id_fkey')->references('id')->on('modalidade')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('atividade_id', 'pessoa_atividade_atividade_id_fkey')->references('id')->on('atividade')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('instituicao_id', 'pessoa_atividade_instituicao_id_fkey')->references('id')->on('instituicao')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('municipio_id', 'pessoa_atividade_municipio_id_fkey')->references('id')->on('municipio')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pessoa_atividade', function(Blueprint $table)
		{
			$table->dropForeign('pessoa_atividade_pessoa_id_fkey');
			$table->dropForeign('pessoa_atividade_modalidade_id_fkey');
			$table->dropForeign('pessoa_atividade_atividade_id_fkey');
			$table->dropForeign('pessoa_atividade_instituicao_id_fkey');
			$table->dropForeign('pessoa_atividade_municipio_id_fkey');
		});
	}

}
