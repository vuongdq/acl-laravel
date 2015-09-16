<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

use Bican\Roles\Models\Role;
use Bican\Roles\Models\Permission;

class TestController extends Controller
{
    //

    public function test($id){
    	$user = User::find(1);
		$user->attachRole(1);
		$user = User::find(2);
		$user->attachRole(2);
		$user = User::find(3);
		$user->attachRole(3);
		$user = User::find(4);
		$user->attachRole(4);

    	return view('test');
    }
}
