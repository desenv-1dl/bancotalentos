<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tat', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('pessoa_id');
			$table->string('ano', 4);
			$table->string('mencao');
			$table->string('motivo_nao_realizacao')->nullable();
			$table->string('documento');
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
		Schema::drop('tat');
	}

}
