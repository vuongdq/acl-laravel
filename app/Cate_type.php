<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate_type extends Model
{
    //
     protected $table = 'catetypes';

	protected $fillable = ['name','alias','keywords','description'];


	public $timestamps = false;

	public function cate () {
		return $this->hasMany('App\Cate');
	}
}
