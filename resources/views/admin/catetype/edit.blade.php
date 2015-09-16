@extends('admin.layouts.master')
@section('title')
	Add Category type
@endsection
@section('content')

<div class="col-md-6 col-md-offset-3">


	<div class="panel panel-primary">
		<div class="panel-heading"><h4>Add New Category Type</h4></div>
		<div class="panel-body">
		@include('admin.layouts.error')
		<form action="" method="POST" role="form">
			{{ csrf_field() }}
			<legend>Add New Category Type</legend>
			<div class="form-group">
				<label for="">Cate Name</label>
				<input type="text" class="form-control" id="" placeholder="Input Name" name="txtName" value="{!! old('txtName',isset($data) ? $data['name'] : null) !!}">
			</div>
			<div class="form-group">
				<label for="">keywords</label>
				<input type="text" class="form-control" id="" placeholder="Input Keyword" name="txtKeywords" value="{!! old('txtKeywords',isset($data) ? $data['keywords'] : null) !!}">
			</div>
			<div class="form-group">
				<label for="">Description</label>
				<input type="text" class="form-control" id="" placeholder="Input Description" name="txtDescription" value="{!! old('txtDescription',isset($data) ? $data['description'] : null) !!}">
			</div>

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		</div>
	</div>
</div>
@endsection


