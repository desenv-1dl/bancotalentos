<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTafTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('taf', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('pessoa_id');
			$table->integer('nr_taf');
			$table->string('ano', 4);
			$table->integer('chamada');
			$table->date('data_realizacao');
			$table->string('mencao');
			$table->string('suficiencia');
			$table->string('situacao');
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
		Schema::drop('taf');
	}

}
