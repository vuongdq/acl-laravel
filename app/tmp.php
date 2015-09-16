<?php
$createAdminRole = Role::create([
			'id'=>1,
			'name' => 'Admin Role',
			'slug'	=>'admin',
			'description'	=> 'Admin Role',
			'level' => 1

			]);
		$createModeratorRole = Role::create([
			'id'=>2,
			'name' => 'Moderator Role',
			'slug'	=>'mode',
			'description'	=> 'Moderator Role',
			'level' => 2

			]);
		$createMemberRole = Role::create([
			'id'=>3,
			'name' => 'User Member',
			'slug'	=>'member',
			'description'	=> 'Register member',
			'level' => 3

			]);

// AttachRole

		$user = User::find(1);
		$user->attachRole(7);


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