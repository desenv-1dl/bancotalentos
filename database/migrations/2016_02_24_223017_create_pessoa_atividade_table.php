<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePessoaAtividadeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pessoa_atividade', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('pessoa_id');
			$table->integer('modalidade_id')->nullable();
			$table->integer('atividade_id')->nullable();
			$table->integer('instituicao_id')->nullable();
			$table->decimal('custo_atividade', 18)->nullable();
			$table->integer('municipio_id')->nullable();
			$table->date('ano')->nullable();
			$table->smallInteger('carga_horaria')->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pessoa_atividade');
	}

}
