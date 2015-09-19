<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table = 'articles';

	protected $fillable = ['name','alias','price','intro','content','image','keywords','description','user_id','cate_id'];

	public $timestamps = false;

	public function cate () {
		return $this->belongTo('App\Cate');
	}

	public function user () {
		return $this->belongTo('App\User');
	}
	// public function article_type() {
	// 	$return $this->belongTo('App\Articles_type');
	// }
}
