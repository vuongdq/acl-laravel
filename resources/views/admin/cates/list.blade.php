@extends('admin.layouts.master')

@section('title')
Test Role
@endsection

@section('content')
Content

<table class="table table-hover">
	<thead>
		<tr>
			<th>Name</th>
			<th>Parent</th>
			<th>Action</th>

		</tr>
	</thead>
	<tbody>
	@foreach($data as $item)
		<tr>
			<td>{!! $item['name'] !!}</td>
			<td>{!! $item['parent_id'] !!}</td>
			<td>Edit / <a href="{!! url('admin/cate/delete',$item["id"]) !!}">Delete</a></td>
		</tr>
	@endforeach
	</tbody>
</table>
	
@endsection