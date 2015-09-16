@include('layouts.header')

@include('layouts.nav')
<div class="container">
<a href="{!! url('admin/cate/add') !!}"><button type="button" class="btn btn-default">Add New Cate</button></a>
<div class="col-lg-12">
                        @if (Session::has('flash_message'))
                            <div class="alert alert-{!! Session::get('flash_level') !!}">
                                {!! Session::get('flash_message') !!}
                            </div>
                        @endif
                    </div>
	<div class="row">
		@yield('content')
	</div>			
</div>


@include('layouts.footer')


	
