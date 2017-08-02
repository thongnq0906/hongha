@extends('admin.layouts.app')
@section('content')
<div class="container">
    <div class="">
    	<form action="{{ route('update-category',['id'=>$id]) }}" method="post">
			<div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
				<label for="category">Tên danh mục:</label>
				@if ($errors->has('category'))
                    <span class="help-block">
                        {{ $errors->first('category') }}
                    </span>
                @endif
				<input type="text" class="form-control" name="category" required="" value="{{ $category->category }}">
			</div>
			<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
				<label for="description">Miêu tả chi tiết:</label>
				@if ($errors->has('description'))
                    <span class="help-block">
                        {{ $errors->first('description') }}
                    </span>
                @endif
				<input type="text-area" class="form-control" name="description" value="{{ $category->description }}">
			</div>
			<div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
				<label for="description">Positon:</label>
				@if ($errors->has('position'))
                    <span class="help-block">
                        {{ $errors->first('position') }}
                    </span>
                @endif
				<input type="text-area" class="form-control" name="position" value="{{ $category->position }}">
			</div>
			<select class="form-control" name="parent_id">
				<?php $hihi = DB::table('categories')->where('id',$category->parent_id)->first(); ?>
				@if(isset($hihi))
				<option value="{{ $category->parent_id }}">
					{{ $hihi->category }}
				</option>
				@else
				<option value="0">
					{{ $category->category }}
				</option>
				@endif
				<?php  menu($data);?>
			</select>
			<div class="">
                        <label>
                            <input name="is_hidden" type="checkbox" class="js-switch"
                                    {{($category->is_hidden)?'checked':''}}
                            /> Ẩn bài viết
                        </label>
                    </div>
			{{ csrf_field() }}
			<input type="hidden" name="id" value="{{ $id }}">
			<button type="submit" class="btn btn-default">Cập nhật</button>
		</form>
    </div>
</div>
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>
@endsection