@extends('admin.layouts.app')
@section('content')
<div class="container">
    <div class="">
    	<form action="{{ route('add-category') }}" method="post">
			<div class="form-group">
				<label for="category">Tên danh mục:</label>
				<input type="text" class="form-control" name="category" required="">
			</div>
			<div class="form-group">
				<label for="description">Miêu tả chi tiết:</label>
				<input type="text-area" class="form-control" name="description" required="">
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
					<th class="col-md-3">Sửa / Xóa</th>
				</tr>
			</thead>
			<tbody>
			@foreach($categories as $category)
			
				<tr>
				
					
					<td>{{$category->id}}</td>
					<td>{{$category->category}}</td>
					<td>{{$category->description}}</td>	
					<td>
						<a href="{{ route('edit-category',['id'=>$category->id])  }}">
						<button class="btn btn-default	">Sửa</button>
						</a>
						<form action="{{ route('remove-category') }}" method="post" style="display:inline;">
						<input type="hidden" name="id" value="{{$category->id}}">
						<button class="btn btn-danger" type="submit">Xóa</button>
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