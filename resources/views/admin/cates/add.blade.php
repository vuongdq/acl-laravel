@extends('admin.layouts.master')
@section('title')
	Add Category
@endsection
@section('content')

<div class="col-md-6 col-md-offset-3">
	<div class="panel panel-primary">
		<div class="panel-heading"><h4>Danh sach Cate</h4></div>
		<div class="panel-body">
		@include('admin.layouts.error')
		<ul>
		@foreach($catetype as $type)	
			<li><a href="{!! url('admin/cate/add',$type['id'] ) !!}"><button type="button" class="btn btn-default">{!! $type['name'] !!}</button></a></li>	
		@endforeach
		</ul>
		</div>
	</div>
</div>
@endsection


