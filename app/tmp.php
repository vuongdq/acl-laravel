<?php
$adminRole = Role::create([
		    'name' => 'Admin',
		    'slug' => 'admin',
		    'description' => '', // optional
		    'level' => 1, // optional, set to 1 by default
		]);

		$moderatorRole = Role::create([
		    'name' => 'Moderator',
		    'slug' => 'moderator',
		    'level' =>2
		]);
		$moderatorRole = Role::create([
		    'name' => 'Member',
		    'slug' => 'member',
		    'level' =>3
		]);
		$moderatorRole = Role::create([
		    'name' => 'Banned',
		    'slug' => 'banned',
		    'level' =>4
		]);

		$user = User::find(1);
		$user->attachRole(1);
		$user = User::find(2);
		$user->attachRole(2);
		$user = User::find(3);
		$user->attachRole(3);
		$user = User::find(4);
		$user->attachRole(4);


		//Permission

		$createUsersPermission = Permission::create([
		    'name' => 'Create users',
		    'slug' => 'create.users',
		    'description' => '', // optional
		]);

		$deleteUsersPermission = Permission::create([
		    'name' => 'Delete users',
		    'slug' => 'delete.users',
		]);



		 //    echo $id= Auth::user()->id;
 //    $user = User::find($id);

	// $user->attachRole(2); // you can pass whole object, or just an id

	// if ($user->is('forum.moderator')) { // you can pass an id or slug
 //    // or alternatively $user->hasRole('admin')
	// 	echo 'Day chinh la forum.moderator';
	// }
	// else
	// {
	// 	echo 'khong phai forum.moderator';
	// }
 //    	return view('test',compact('user'));
  //   	$createCatePermision = Permission::create([
		//     'name' => 'Create Cate',
		//     'slug' => 'admin.cates.add',
		//     'description' => '', // optional
		//     'model' => 'Cate',
		// ]);
		
?>