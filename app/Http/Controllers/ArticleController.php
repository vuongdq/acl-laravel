<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cate_type;
use App\Cate;
use App\Article;
use Auth;

class ArticleController extends Controller
{
    //
   public function getAdd(){
   		$id=1; // Catetype id =1~ Articles!
        $catetype = Cate_type::find($id)->first();
        $parent = Cate::select('id','name','parent_id')->where('catetype_id',$id)->get()->toArray();

        return view('admin.articles.add',compact('catetype','parent'));
    }
    public function postAdd(Request $request){
        $article = new Article;
    	$id=1;
    	echo $request->txtName;
    	$article->name = $request->txtName;
    	$article->price = $request->txtPrice;
    	$article->intro = $request->txtIntro;
    	$article->content = $request->txtContent;
    	$article->keywords = $request->txtKeywords;
    	$article->description = $request->txtDescription;
        $article->user_id = Auth::user()->id;
        $article->cate_id = $request->txtParent;
        $article->save();
        return redirect('/')->with(['flash_level'=>'success','flash_message'=>'Success !! Complate Delete Category']);
    }
}
