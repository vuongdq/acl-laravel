@extends('admin.layouts.master')

@section('title')
Test Role
@endsection

@section('content')
Content

<table class="table table-hover">
	<thead>
		<tr>
			<th>Stt</th>
			<th>user_id</th>
			<th>Name</th>
			<th>Parent</th>
			<th>Category type</th>
			<th>Action</th>

		</tr>
	</thead>
	<tbody>
	<?php $i=0; ?>
	@foreach($data as $item)
		<tr>
			<td><?php echo $i+=1; ?></td>
			<td>{!! $item['id'] !!}</td>
			<td>{!! $item['name'] !!}</td>
			<td>
				@if ($item["parent_id"] == 0)
                    {!! "None" !!}
                @else
                    <?php 
                        $parent = DB::table('cates')->where('id',$item["parent_id"])->first();
                        echo $parent->name;
                    ?>
                @endif
            </td>
			<td>	
				<?php 
                        $catetypename = DB::table('catetypes')->where('id',$item["catetype_id"])->first();
                        echo $catetypename->name;
                ?>
			</td>
			<td><a href="{!! url('admin/cate/edit',$item["id"]) !!}">Edit</a> / <a href="{!! url('admin/cate/delete',$item["id"]) !!}">Delete</a></td>
		</tr>
	@endforeach
	</tbody>
</table>
	
@endsection