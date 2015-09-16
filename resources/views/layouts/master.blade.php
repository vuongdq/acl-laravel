@include('layouts.header')

@include('layouts.nav')
<div class="container">
	<div class="row">
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


	
