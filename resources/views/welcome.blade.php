@extends('themes.vuongdq.master')

@section('title')
    Trang chu
@endsection

@section('content')
@role(1)
<!-- Role Id =1 -->
	 <a href="{!! url('admin') !!}"><button type="button" class="btn btn-default">Admin</button></a> 
@endrole
@role(3)
<!-- Member Role_id =3 -->
	Member Area!!!
@endrole
@role(2)
<!-- Member Role_id =3 -->
	Mode Area!!!
@endrole
@role(4)
<!-- Role Id =4 -->
	Banned Area!!!
@endrole
<br />

Content Here!!!
@endsection