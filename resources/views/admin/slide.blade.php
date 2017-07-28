@extends('admin.layouts.app')
@section('content')
<div class="container">
    <div class="">
    	@if(Session::has('success'))
			<div class="alert alert-success">
				{{Session::get('success')}}
			</div>
		@endif
		@if(Session::has('success-update'))
			<div class="alert alert-success">
				{{Session::get('success-update')}}
			</div>
		@endif
    	<form action="{{ route('add-slide') }}" method="post" 
    		enctype="multipart/form-data">
			<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
				<label for="title">Tiêu đề:</label>
				@if ($errors->has('title'))
                    <span class="help-block">
                        {{ $errors->first('title') }}
                    </span>
                @endif
				<input type="text" class="form-control" name="title" value="{{old('title')}}">
			</div>
			<div class="form-group{{$errors->has('description') ? 'has-error' : ''}}">
				<label for="description">Nội dung:</label>
				@if($errors->has('description'))
					<span class="help-block">
						{{$errors->first('description')}}
					</span>
				@endif
				<textarea name="description" class="form-control""></textarea>
			</div>
			<div class="form-group{{$errors->has('image') ? 'has-error' : ''}}">
				<label for="image">Ảnh:</label>
				@if(Session::has('error'))
					<span class="help-block">{{Session::get('error')}}</span>
				@endif
				@if($errors->has('image'))
					<span class="help-block">
						{{$errors->first('image')}}
					</span>
				@endif
				<input name="image" type="file" class=""">
			</div>
			{{ csrf_field() }}
			<button id="submit" type="submit" class="btn btn-primary">Thêm</button>
		</form>
		<div style="text-align: center;">
	    	</div>
		<table class="table">
			<thead>
				<tr>
					<th class="col-md-1">ID</th>
					<th class="col-md-2">Tên tiêu đề</th>
					<th class="col-md-*">Miêu tả chi tiết</th>
					<th class="col-md-1">Ảnh</th>
					<th class="col-md-1"></th>
				</tr>
			</thead>
			<tbody>
			@foreach($slide as $s)
				<tr>
					<td>{{$s->id}}</td>
					<td>{{$s->title}}</td>
					<td>{{$s->description}}</td>
					<td>
						<img src="{{$s->image}}" style="max-width: 100%;"/>
					</td>
					<td>
						<a href="{{ route('edit-slide',['id'=>$s->id])  }}">
						<button class="btn btn-default">Sửa</button>
						</a>
						<form action="{{ route('remove-slide') }}" method="post" style="display:inline;">
						<input type="hidden" name="id" value="{{$s->id}}">
						<button class="btn btn-danger" type="submit" onclick="return confirm_delete('are you sure delete')">Xóa</button>
						{{ csrf_field() }}
						</form>
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
		<div style="text-align: center;"></div>
	</div>
</div>
@endsection
@section('script')
<script type="text/javascript">
$("#submit").click(function(){
    $("#isHidden").attr("value", "0");
});
$("#saveDraft").click(function(){
    $("#isHidden").attr("value", "1");
});
</script>





<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea.my-editor",
    plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
  ],
  toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help',
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>




@endsection