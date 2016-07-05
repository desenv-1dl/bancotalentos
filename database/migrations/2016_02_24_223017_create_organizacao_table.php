<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrganizacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('organizacao', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nome')->nullable()->unique('organizacao_nome_key');
			$table->string('nome_abrev')->nullable()->unique('organizacao_nome_abrev_key');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('organizacao');
	}

}
