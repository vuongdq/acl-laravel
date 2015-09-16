@extends('admin.layouts.master')

@section('title')
Test Role
@endsection

@section('content')
Content

<table class="table table-hover">
	<thead>
		<tr>
			<th>Stt</th>
			<th>user_id</th>
			<th>Name</th>
			<th>Action</th>

		</tr>
	</thead>
	<tbody>
	<?php $i=0; ?>
	@foreach($data as $item)
		<tr>
			<td><?php echo $i+=1; ?></td>
			<td>{!! $item['id'] !!}</td>
			<td>{!! $item['name'] !!}</td>
			<td><a href="{!! url('admin/catetype/edit',$item["id"]) !!}">Edit</a> / <a href="{!! url('admin/catetype/delete',$item["id"]) !!}">Delete</a></td>
		</tr>
	@endforeach
	</tbody>
</table>
	
@endsection