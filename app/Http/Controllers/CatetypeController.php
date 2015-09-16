<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cate_type;

class CatetypeController extends Controller
{
    //
    public function getAdd(){
    	return view('admin.catetype.add');
    }
    public function postAdd(Request $request){
    	$catetype = new Cate_type;
    	$catetype->name = $request->txtName;
    	$catetype->alias = changeTitle($request->txtName);
    	$catetype->keywords = $request->txtKeywords;
    	$catetype->description = $request->txtDescription;
    	$catetype->save();
    	return redirect()->route('admin.catetype.getList')->with(['flash_level'=>'success','flash_message'=>'ok !! Add new CateType Success! ']);
            
    }
    public function getList(){
    	$data = Cate_type::select('id','name')->orderBy('id','DESC')->get()->toArray();

        return view('admin.catetype.list',compact('data'));
    }
    public function getEdit($id){
    	$data =  Cate_type::find($id)->toArray();
    	return view('admin.catetype.edit',compact('data'));

    }
    public function postEdit(Request $request,$id){
    	$this->validate($request,
            ['txtName'  => 'required'],
            ['txtName.required' => "Please Enter Name Category"]
            );
    	$catetype =  Cate_type::find($id);
    	$catetype->name = $request->txtName;
    	$catetype->alias = changeTitle($request->txtName);
    	$catetype->keywords = $request->txtKeywords;
    	$catetype->description = $request->txtKeywords;
    	$catetype->save();
    	return redirect()->route('admin.catetype.getList')->with(['flash_level'=>'success','flash_message'=>'ok !! Add new CateType Success! ']);
    }
    public function getDelete($id){
    	$catetype =  Cate_type::find($id);
    	$catetype->delete($id);
    	return redirect()->route('admin.catetype.getList')->with(['flash_level'=>'success','flash_message'=>'ok !! Delete CateType Success! ']);
    
    }

}
