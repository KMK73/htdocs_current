<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wall extends Model {

	protected $table = 'wall';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	public function emotion()
	{
		return $this->belongsTo('App\Emotion');
	}

}