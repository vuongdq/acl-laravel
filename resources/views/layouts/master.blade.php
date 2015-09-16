@include('layouts.header')

@include('layouts.nav')
<div class="container">
	<div class="row">
	<a href="{!! url('admin/cate/add') !!}"><button type="button" class="btn btn-default">Add New Cate</button></a>
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h4>@yield('title')</h4>
				</div>
				<div class="panel-body">
					@include('layouts.error')
					@yield('content')
				</div>
				

			</div>
		</div>
	</div>
</div>


@include('layouts.footer')


	
