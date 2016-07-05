<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('logon', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('pessoa_id')->nullable();
			$table->integer('nivel_acesso')->nullable();
			$table->string('senha')->nullable();
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
		Schema::drop('logon');
	}

}
