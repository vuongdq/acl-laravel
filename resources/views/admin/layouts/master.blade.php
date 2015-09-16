@include('themes.vuongdq.layouts.header')

@include('themes.vuongdq.layouts.nav')
<div class="container">
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <a href="{!! url('admin/cate/add') !!}"><button type="button" class="btn btn-default">Add New Category</button></a>
<a href="{!! url('admin/cate/list') !!}"><button type="button" class="btn btn-default">List Category</button></a>
<a href="{!! url('admin/catetype/add') !!}"><button type="button" class="btn btn-default">Add New CateType</button></a>
<a href="{!! url('admin/catetype/list') !!}"><button type="button" class="btn btn-default">List Category Type</button></a>
    </div>

 
</div>
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


@include('themes.vuongdq.layouts.footer')


	
