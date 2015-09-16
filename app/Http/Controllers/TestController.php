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

		$user = User::find($id);

		if ($user->is('admin')) {
			echo 'Admin';
		}
		elseif($user->is('mode')){
			echo 'Mode';
		}
		elseif($user->is('member')){
			echo 'member';

		}
		else{
			echo 'Not Role';
		}
		echo '<br />';

		if ($user->is('admin|mode')) { 
			echo "Ban co quyen truy cap vao Admin";
		}
		else{
			echo "xin loi! khong the truy cap";
		}

		if ($user->can(10)) {
			echo 'You can create New User';
		}
		else{
			echo "You can't create New Youser";
		}
		if ($user->can(11)) {
			echo 'You can Delete New User';
		}
		else{
			echo "You can't Delete New Youser";
		}

    	return view('test');
    }
}
