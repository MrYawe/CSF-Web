<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conteneur extends Model {

	protected $table = 'conteneur';
	protected $fillable = array('taille', 'id_user');
	public $timestamps = true;

}