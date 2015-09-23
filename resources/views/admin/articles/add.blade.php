@extends('admin.layouts.master')
@section('title')
	Add Category
@endsection
@section('content')

<div class="col-md-6 col-md-offset-3">
	<div class="panel panel-primary">
		<div class="panel-heading"><h4>Add New Category</h4></div>
		<div class="panel-body">
		@include('admin.layouts.error')

		<form action="" method="POST" role="form">
			{{ csrf_field() }}
			<legend>Add New {!! $catetype->name !!} Category</legend>         

			<div class="form-group">
				 <select class="form-control" name="txtParent">
	                <option value="0">Please Choose Category</option>
	                <?php cate_parent($parent); ?>
            	</select>
			</div>
			<div class="form-group">
				<label for="">Name</label>
				<input type="text" class="form-control" id="" placeholder="Input Name" name="txtName">
			</div>
			<div class="form-group">
				<label for="">Price</label>
				<input type="text" class="form-control" id="" placeholder="Input Price" name="txtPrice">
			</div>
			<div class="form-group">
				<label for="">Intro</label>
				<input type="text" class="form-control" id="" placeholder="Input Intro" name="txtIntro">
			</div>
			<div class="form-group">
				<label for="">Content</label>
				<input type="text" class="form-control" id="" placeholder="Input Content" name="txtContent">
			</div>
			
			<div class="form-group">
				<label for="">Keywords</label>
				<input type="text" class="form-control" id="" placeholder="Input Intro" name="txtKeywords">
			</div>

			<div class="form-group">
				<label for="">Description</label>
				<input type="text" class="form-control" id="" placeholder="Input Intro" name="txtDescription">
			</div>

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		</div>
	</div>
</div>
@endsection


