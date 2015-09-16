<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CateRequest;
use App\Cate;

class CateController extends Controller
{
    //
    public function getAdd(){
        $parent = Cate::select('id','name','parent_id')->get()->toArray();
        return view('admin.cates.add',compact('parent'));
    }
    public function postAdd(CateRequest $request){
        $cate = new Cate;

        $cate->name        = $request->txtName;
        $cate->alias       = changeTitle($request->txtName);
        $cate->order       = $request->txtOrder;
        $cate->parent_id   = $request->txtParent;

        $cate->keywords    = $request->txtKeywords;
        $cate->description = $request->txtDescription;
        $cate->save();
        return redirect()->route('admin.cates.list')->with(['flash_level'=>'success','flash_message'=>'Success !! Complete Add Category']);
    }
    public function getList(){
        $data = Cate::select('id','name','parent_id')->orderBy('id','DESC')->get()->toArray();
        return view('admin.cates.list',compact('data'));
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
}
