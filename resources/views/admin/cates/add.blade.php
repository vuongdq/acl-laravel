@extends('admin.layouts.master')

@section('content')

<div class="col-md-6 col-md-offset-3">
	<div class="panel panel-primary">
		<div class="panel-heading"><h4>Add New Category</h4></div>
		<div class="panel-body">
		@include('layouts.error')
		<form action="{!! url('admin/cate/add') !!}" method="POST" role="form">
			{{ csrf_field() }}
			<legend>Add New Cate Now</legend>

			<div class="form-group">
				 <select class="form-control" name="txtParent">
	                <option value="0">Please Choose Category</option>
	                <?php cate_parent($parent); ?>
            	</select>
			</div>
			<div class="form-group">
				<label for="">Cate Name</label>
				<input type="text" class="form-control" id="" placeholder="Input Name" name="txtName">
			</div>
			<div class="form-group">
				<label for="">Order</label>
				<input type="text" class="form-control" id="" placeholder="Input Order" name="txtOrder">
			</div>
			<div class="form-group">
				<label for="">keywords</label>
				<input type="text" class="form-control" id="" placeholder="Input Keyword" name="txtKeywords">
			</div>
			<div class="form-group">
				<label for="">Description</label>
				<input type="text" class="form-control" id="" placeholder="Input Description" name="txtDescription">
			</div>

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		</div>
	</div>
</div>
@endsection


