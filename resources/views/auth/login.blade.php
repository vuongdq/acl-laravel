

@extends('themes.vuongdq.master')


@section('title')
	User Login
@endsection

@section('content')
	<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Email</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="email">
                            </div>
                        </div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									login
								</button>
							</div>
						</div>
					</form>
@endsection