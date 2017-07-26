@extends('admin.layouts.app')
@section('content')
<div class="container">
    <div class="">
    	<form action="{{ route('update-category',['id'=>$id]) }}" method="post">
			<div class="form-group">
				<label for="category">Tên danh mục:</label>
				<input type="text" class="form-control" name="category" required="" value="{{ $category->category }}">
			</div>
			<div class="form-group">
				<label for="description">Miêu tả chi tiết:</label>
				<input type="text-area" class="form-control" name="description" value="{{ $category->description }}">
			</div>
			<select class="form-control" name="parent_id">
				<option value="0" selected="selected">Chọn danh mục</option>
				<?php  menu($data);?>
			</select>
			{{ csrf_field() }}
			<input type="hidden" name="id" value="{{ $id }}">
			<button type="submit" class="btn btn-default">Cập nhật</button>
		</form>
    </div>
</div>
@endsection