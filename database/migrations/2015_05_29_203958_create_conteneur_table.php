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
			$table->integer('id_user')->unsigned();
			$table->foreign('id_user')
                  ->references('id')
                  ->on('users')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::drop('conteneur');
	}
}