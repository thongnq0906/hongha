@extends('admin.layouts.app')
@section('content')
<div class="container">
    <div class="">
    	<form action="{{ route('add-category') }}" method="post">
			<div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
			<label for="category">Tên danh mục:</label>
				@if ($errors->has('category'))
                    <span class="help-block">
                        {{ $errors->first('category') }}
                    </span>
                @endif
				
				<input type="text" class="form-control" name="category" >
			</div>
			<select class="form-control" name="parent_id">
				<option value="0" selected="selected">Chọn danh mục</option>
				<?php  menu($data);?>
			</select>
			<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
				<label for="description">Miêu tả chi tiết:</label>
				@if ($errors->has('description'))
                    <span class="help-block">
                        {{ $errors->first('description') }}
                    </span>
                @endif
				<input type="text-area" class="form-control" name="description">
			</div>
			<div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
			<label for="description">Positon:</label>
				@if ($errors->has('position'))
                    <span class="help-block">
                        {{ $errors->first('position') }}
                    </span>
                @endif
				
				<input type="number" class="form-control" name="position">
			</div>
			{{ csrf_field() }}
			<button type="submit" class="btn btn-default">Thêm</button>
		</form>
    
		<table class="table">
			<thead>
				<tr>
					<th class="">ID</th>
					<th class="">Tên danh mục</th>
					<th class="">Miêu tả chi tiết</th>
					<th class="">Positon</th>
					<th class="col-md-3">Trang thai</th>
					<th class="col-md-3">Sửa / Xóa</th>
					

				</tr>
			</thead>
			<tbody>
			@foreach($categories as $category)
			
				<tr>
				
					
					<td>{{$category->id}}</td>
					<td>{{$category->category}}</td>
					<td>{{$category->description}}</td>
					<td>{{$category->position}}</td>
					<td>
						@if($category->is_hidden == 1)
						<span class="label label-warning">Đang ẩn</span>
						@else
						<span class="label label-success">Đang hiện</span>
						@endif
					</td>
					<td>
						<a href="{{ route('edit-category',['id'=>$category->id])  }}">
						<button class="btn btn-default	">Sửa</button>
						</a>
						<form action="{{ route('remove-category') }}" method="post" style="display:inline;">
						<input type="hidden" name="id" value="{{$category->id}}">
						<button class="btn btn-danger" type="submit" onclick="return confirm_delete('are you sure delete')">Xóa</button>
						{{ csrf_field() }}
						</form>
					</td>
												
					
				
				</tr>
				
			@endforeach
			</tbody>
		</table>
		
		
		 
	</div>
</div>
@endsection