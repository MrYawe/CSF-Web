<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConteneurTable extends Migration {

	public function up()
	{
		Schema::create('conteneur', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('taille');
		});
	}

	public function down()
	{
		Schema::drop('conteneur');
	}
}