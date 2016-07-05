<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePessoaCondecoracaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pessoa_condecoracao', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('pessoa_id');
			$table->integer('condecoracao_id');
			$table->date('data_indicacao')->nullable();
			$table->date('data_condecoracao')->nullable();
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
		Schema::drop('pessoa_condecoracao');
	}

}
