@include('layouts.header')

@include('layouts.nav')
<div class="container">
<a href="{!! url('admin/cate/add') !!}"><button type="button" class="btn btn-default">Add New Cate</button></a>
	<div class="row">
		@yield('content')
	</div>			
</div>


@include('layouts.footer')


	
