<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles_type extends Model
{
    //
    protected $table = 'articles_types';

	protected $fillable = ['name','alias','keywords','description'];


	public $timestamps = false;

	public function article () {
		return $this->hasMany('App\Article');
	}
}
