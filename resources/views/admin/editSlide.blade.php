@extends('admin.layouts.app')
@section('content')
    <div class="">
    	<form action="{{ route('update-slide',$slide->id) }}" method="post" enctype="multipart/form-data">
      <div class="row">
      <div class="col-md-8" >
        <div class="form-group{{$errors->has('title') ? 'has-error' : ''}}">
        <label for="title">Tiêu đề:</label>
          @if($errors->has('title'))
            <span class="help-block">{{$errors->first('title')}}</span>
          @endif
        <input type="text" class="form-control" name="title" value="{{ $slide->title }}">
      </div>
      <div class="form-group{{$errors->has('description') ? 'has-error' : ''}}">
        <label for="description">Miêu tả chi tiết:</label>
          @if($errors->has('description'))
            <span class="help-block">{{$errors->first('description')}}</span>
          @endif
        <textarea name="description" class="form-control" >{{ $slide->description }}</textarea>
      </div>
      </div>
      <div class="col-md-8" >
        <div class="form-group{{$errors->has('image') ? 'has-error' : ''}}">
          <label for="image">Ảnh:</label>
            @if(Session::has('error'))
              <span class="help-block">{{Session::get('error')}}</span>
            @endif
            @if($errors->has('image'))
              <span class="help-block">{{$errors->first('image')}}</span>
            @endif
          <input name="image" type="file" class="" value="{{$slide->image}}">
          <img src="{{$slide->image}}" style="max-width: 30%;"/>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
      </div>
			{{ csrf_field() }}
			
		</form>
    </div>
@endsection
@section('script')

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
<script src="{{asset('../vendors/switchery/dist/switchery.min.js')}}"></script>
@endsection