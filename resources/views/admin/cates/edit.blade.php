@extends('admin.layouts.master')

@section('title')
	Edit Category
@endsection

@section('content')

<div class="col-md-6 col-md-offset-3">
	<div class="panel panel-primary">
		<div class="panel-heading"><h4>Edit Cate Now</h4></div>
		<div class="panel-body">
		@include('layouts.error')
		<form action="" method="POST" role="form">
			{{ csrf_field() }}
			<legend>Edit Cate Now</legend>

			<div class="form-group">
				 <select class="form-control" name="txtParent">
	                <option value="0">Please Choose Category</option>
	                <?php cate_parent ($parent,0,"--",$data["parent_id"]) ?>
            	</select>
			</div>
			<div class="form-group">
				<label for="">Cate Name</label>
				<input type="text" class="form-control" id="" placeholder="Input Name" name="txtName" value="{!! old('txtName',isset($data) ? $data['name'] : null) !!}">
			</div>
			<div class="form-group">
				<label for="">Order</label>
				<input type="text" class="form-control" id="" placeholder="Input Order" name="txtOrder" value="{!! old('txtOrder',isset($data) ? $data['order'] : null) !!}">
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


