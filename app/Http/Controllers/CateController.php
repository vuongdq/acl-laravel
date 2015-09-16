<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CateRequest;
use App\Cate;
use App\Cate_type;

class CateController extends Controller
{
    //
    // public function getAdd(){
    //     $catetype = Cate_type::select('id','name')->get()->toArray();
    //     $parent = Cate::select('id','name','parent_id')->get()->toArray();
    //     return view('admin.cates.add',compact('parent','catetype'));
    // }
    // public function postAdd(CateRequest $request){
    //     $cate = new Cate;

    //     $cate->name        = $request->txtName;
    //     $cate->alias       = changeTitle($request->txtName);
    //     $cate->order       = $request->txtOrder;
    //     $cate->parent_id   = $request->txtParent;
    //     $cate->catetype_id =$request->txtCatetype;

    //     $cate->keywords    = $request->txtKeywords;
    //     $cate->description = $request->txtDescription;
    //     $cate->save();
    //     return redirect()->route('admin.cates.list')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete Add Category']);
    // }
    public function getAdd(){
        $catetype = Cate_type::select('id','name')->get()->toArray();
        return view('admin.cates.add',compact('catetype'));
    }
    public function getAddType($id){
        $catetype = Cate_type::find($id)->first();
        $parent = Cate::select('id','name','parent_id')->where('catetype_id',$id)->get()->toArray();
        return view('admin.cates.addtype',compact('parent','catetype'));
    }
    public function postAddType(CateRequest $request,$id){
        $cate = new Cate;

        $cate->name        = $request->txtName;
        $cate->alias       = changeTitle($request->txtName);
        $cate->order       = $request->txtOrder;
        $cate->parent_id   = $request->txtParent;
        $cate->catetype_id =$id;
        $cate->keywords    = $request->txtKeywords;
        $cate->description = $request->txtDescription;
        $cate->save();
        return redirect()->route('admin.cates.list')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete Add Category']);
    }
    public function postAdd(CateRequest $request){
        $cate = new Cate;

        $cate->name        = $request->txtName;
        $cate->alias       = changeTitle($request->txtName);
        $cate->order       = $request->txtOrder;
        $cate->parent_id   = $request->txtParent;
        $cate->catetype_id =$request->txtCatetype;

        $cate->keywords    = $request->txtKeywords;
        $cate->description = $request->txtDescription;
        $cate->save();
        return redirect()->route('admin.cates.list')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete Add Category']);
    }
    public function getList(){
        $catetype = Cate_type::select('id','name')->get()->toArray();
        $data = Cate::select('id','name','parent_id','catetype_id')->orderBy('id','DESC')->get()->toArray();
        return view('admin.cates.list',compact('data','catetype'));
    }
    public function getDelete($id){
        $parent = Cate::where('parent_id',$id)->count();
        if ($parent == 0) {
            $cate = Cate::find($id);
            $cate->delete($id);
            return redirect()->route('admin.cates.list')->with(['flash_level'=>'success','flash_message'=>'Success !! Complate Delete Category']);
        } else {
            return redirect()->route('admin.cates.list')->with(['flash_level'=>'danger','flash_message'=>'Error !! You can\'t Delete this Category']);
            
        }
    }

    public function getEdit($id){
        $data = Cate::find($id);
        $parent = Cate::select('id','name','parent_id')->get()->toArray();
        return view('admin.cates.edit',compact('data','parent'));
    }
    public function postEdit(Request $request,$id){
        $this->validate($request,
            ["txtName" => "required"],
            ["txtName.required"=> "Please Enter Name Category"]
        );
        $cate = Cate::find($id);
        $cate->name        = $request->txtName;
        $cate->alias       = changeTitle($request->txtName);
        $cate->order       = $request->txtOrder;
        $cate->parent_id   = $request->txtParent;
        $cate->keywords    = $request->txtKeywords;
        $cate->description = $request->txtDescription;
        $cate->save();    
        return redirect()->route('admin.cates.list')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete Edit Category']);
    }
}
