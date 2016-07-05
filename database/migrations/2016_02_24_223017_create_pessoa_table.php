<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePessoaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pessoa', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nome')->nullable()->unique('pessoa_nome_key');
			$table->string('nome_guerra')->nullable()->unique('pessoa_nome_guerra_key');
			$table->smallInteger('nivel_funcional_id');
			$table->smallInteger('organizacao_id');
			$table->smallInteger('genero_id');
			$table->smallInteger('formacao_id');
			$table->date('data_nascimento')->nullable();
			$table->string('endereco')->nullable();
			$table->string('numero')->nullable();
			$table->string('complemento')->nullable();
			$table->smallInteger('bairro_id')->nullable();
			$table->smallInteger('municipio_id')->nullable();
			$table->text('obervacao')->nullable();
			$table->boolean('ativa')->nullable()->default(DB::raw('1'));
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
		Schema::drop('pessoa');
	}

}
