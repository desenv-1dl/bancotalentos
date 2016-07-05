<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAtividadeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('atividade', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('codigo')->nullable()->unique('atividade_codigo_key');
			$table->string('nome')->nullable()->unique('atividade_nome_key');
			$table->string('idioma')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('atividade');
	}

}
