<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escale extends Model {

	protected $table = 'escale';
	public $timestamps = true;

	public function concerns()
	{
		return $this->hasOne('Navire');
	}

	public function mouvements()
	{
		return $this->hasMany('Mouvement');
	}

}