<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMouvementTable extends Migration {

	public function up()
	{
		Schema::create('mouvement', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->boolean('est_chargement');
			$table->integer('id_escale')->unsigned();
			$table->integer('id_conteneur')->unsigned();
			$table->datetime('date_mouvement');
		});
	}

	public function down()
	{
		Schema::drop('mouvement');
	}
}