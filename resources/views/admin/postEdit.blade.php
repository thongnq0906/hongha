@extends('admin.layouts.app')
@section('content')
    @if($message)
    <div class="alert alert-success" style="margin-top: 75px;">
      <strong>{{$message}}</a>
    </div>
    @endif
    <div><a href="{{$post->getUrl()}}" target="_blank"><button>Xem bài viết</button></a></div>
    <div class="">
    	<form action="{{ route('update-post',['id'=>$id]) }}" method="post" enctype="multipart/form-data">
      <div class="row">
      <div class="col-md-8" >
        <div class="form-group">
        <label for="post">Tên bài viêt:</label>
        <input type="text" class="form-control" name="post" required="" value="{{ $post->post }}">
      </div>
      <div class="form-group">
        <label for="post">Slug (nên giữ lại phần ID để tránh trùng lặp đường dẫn)</label>
        <input type="text" class="form-control" name="slug" required="" value="{{ $post->slug }}">
      </div>
      <div class="form-group">
        <label for="description">Miêu tả chi tiết:</label>
        <textarea name="description" class="form-control my-editor">{{ $post->description }}</textarea>
      </div>
      </div>
      <div class="col-md-4" >
        <div class="form-group">
          <label for="post">SEO Title</label>
          <input type="text" class="form-control" name="seo_title" required="" value="{{ $post->seo_title }}">
        </div>
        <div class="form-group">
          <label for="description">SEO Description</label>
          <textarea name="seo_description" class="form-control">{{ $post->seo_description }}</textarea>
        </div>
        <div class="form-group">
          <label for="avatar">Ảnh bìa:</label>
          <input name="avatar" type="file" class=""></textarea>
        </div>
        @foreach($categories as $category)
              
              
        <div class="checkbox">
                <label><input 
                type="checkbox" 
                name="{{ $category->id }}" 
                {{ ($post->hasCategory($category->id))?'checked':'' }}
              />{{ $category->category}}</label>
            </div>
        @endforeach
        </div>
        <div class="">
          <label>
            <input name="hot" type="checkbox" class="js-switch" 
              {{($post->hot)?'checked':''}} 
            /> Tin Hot
          </label>
        </div>
        <div class="" style="padding: 15px;">
          <label>
            <input name="news" type="checkbox" class="js-switch" 
              {{($post->news)?'checked':''}} 
            /> Tin Mới
          </label>
        </div>
        <div class="">
          <label>
            <input name="is_hidden" type="checkbox" class="js-switch" 
              {{($post->is_hidden)?'checked':''}} 
            /> Ẩn bài viết
          </label>
        </div>    
      </div>
			
      


			
			{{ csrf_field() }}
      {{ method_field('PATCH') }}
			<button type="submit" class="btn btn-primary">Cập nhật</button>
      
		</form>
    
    <a href="{{route('blog-manage')}}"><button class="btn btn-default">Hủy</button></a>
    </div>
    <form action="{{ route('remove-post') }}" method="post" style="display:inline;">
            <input type="hidden" name="id" value="{{$post->id}}">
            <button class="btn btn-danger" type="submit">Xóa</button>
            {{ csrf_field() }}
            </form>
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