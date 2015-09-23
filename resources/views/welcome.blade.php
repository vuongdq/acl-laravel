@extends('themes.vuongdq.master')

@section('title')
    Trang chu
@endsection

@section('content')
<div class="row">
    <div class="col-md-9">
        Xin chao!
    </div>
	<div class="col-md-3">
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
        <a href="{!! url('article/add') !!}"><button type="button" class="btn btn-default">Add New Articles</button></a>
	</div>

</div>

<br />
<div class="row">
	<div class="col-md-4">
	<h5>Category</h5>
		<ul>
                    <li><a href="{{ url('/') }}">Trang chủ</a></li>
                    <?php
                    $menu_level_1 = DB::table('cates')->where('catetype_id',1)->where('parent_id',0)->get();
                    ?>
                    @foreach($menu_level_1 as $item_level_1)
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="{!! URL('loai-san-pham',[$item_level_1->id,$item_level_1->alias]) !!}">
                            {!! $item_level_1->name !!}
                            <i class="icon icon-angle-down"></i>
                        </a>
                        <?php
                        $menu_level_2 = DB::table('cates')->where('catetype_id',1)->where('parent_id',$item_level_1->id)->get();
                        ?>

                        <ul>
                            @foreach($menu_level_2 as $item_level_2)

                            <li><a href="{!! URL('loai-san-pham',[$item_level_2->id,$item_level_2->alias]) !!}">{!! $item_level_2->name !!}</a></li>
                            @endforeach
                        </ul>

                    </li>

                    @endforeach
	</div>
	<div class="col-md-8">
		<h5>Article</h5>
		<div class="row">
			<div class="col-md-12">
				@foreach($article as $ar)
					<article>
						<h4>{!! $ar->name !!}</h4>
						<p>
							{!! $ar->intro !!}
						</p>
					</article>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection




