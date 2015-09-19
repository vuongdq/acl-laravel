<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cate;
use App\Cate_type;
use Auth;
use App\Article;

class HomeController extends Controller
{
    //
    public function welcome(){
    	$id=1;
		$parent = Cate::select('id','name','parent_id')->where('catetype_id',$id)->get()->toArray();
		$article = Article::all();
    	return view('welcome',compact('parent','article'));
    }

}
