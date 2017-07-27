<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="">
    	<form action="<?php echo e(route('add-post')); ?>" method="post" 
    		enctype="multipart/form-data">
			<div class="form-group">
				<label for="post">Tên bài viết:</label>
				<input type="text" class="form-control" name="post" required="">
			</div>
			<div class="form-group">
				<label for="description">Nội dung:</label>
				<textarea name="description" class="form-control my-editor"></textarea>
			</div>
			<div class="form-group">
				<label for="post">SEO Title</label>
				<input type="text" class="form-control" name="seo_title" required="">
			</div>
			<div class="form-group">
				<label for="description">SEO Description</label>
				<textarea name="seo_description" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<label for="avatar">Ảnh bìa:</label>
				<input name="avatar" type="file" class="">
			</div>
			<div class="form-group">
					<label for="category">Danh mục:</label>
			<div class="checkbox">
                <select class="form-control" name="category_id">
                	<option>Chọn Danh Mục</option>
                    <?php  menu($data);?>
                </select>
            </div>


			</div>
			<?php echo e(csrf_field()); ?>

			<input id="isHidden" type="hidden" name="is_hidden" value="">
			<button id="submit" type="submit" class="btn btn-primary">Thêm</button>
			<button id="saveDraft" class="btn btn-default">Lưu nháp</button>
		</form>
		<div style="text-align: center;">
    	<?php echo $posts->render(); ?>
    	</div>
		<table class="table">
			<thead>
				<tr>
					<th class="col-md-1">ID</th>
					<th class="col-md-2">Tên bài viết</th>
					<th class="col-md-1">Images</th>
					<th class="col-md-*">Miêu tả</th>
					<th class="col-md-1">Danh mục</th>
					<th class="col-md-1">Tin hot</th>
					<th class="col-md-1">Tin mới</th>
					<th class="col-md-1">Trạng thái</th>
					<th class="col-md-1">Xóa</th>
				</tr>
			</thead>
			<tbody>
			<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

				<tr>


					<td><?php echo e($post->id); ?></td>
					<td><a href="<?php echo e($post->getUrl()); ?>"><?php echo $post->post; ?></a></td>
					<td>
						<img src="<?php echo e($post->avatar); ?>" style="max-width: 100%;"/>

					</td>
					<td><?php echo e($post->getShortDec()); ?></td>
					<td>
						<?php echo e($post->Cate->category); ?>

					</td>
					<td>
						<?php if($post->hot == 1): ?>
						<span class="label label-success">Đang Hiện</span>
						<?php else: ?>
						<span class="label  label-warning">Đang Ẩn</span>
						<?php endif; ?>
					</td>
					<td>
						<?php if($post->news == 1): ?>
						<span class="label label-success">Đang Hiện</span>
						<?php else: ?>
						<span class="label  label-warning">Đang Ẩn</span>
						<?php endif; ?>
					</td>
					<td>
						<?php if($post->is_hidden == 1): ?>
						<span class="label label-warning">Đang ẩn</span>
						<?php else: ?>
						<span class="label label-success">Đang hiện</span>
						<?php endif; ?>
					</td>
					<td>
						<a href="<?php echo e(route('edit-post',['id'=>$post->id])); ?>">
							<button class="btn btn-default">Sửa</button>
						</a>
						<form action="<?php echo e(route('remove-post')); ?>" method="post" style="display:inline;">
							<input type="hidden" name="id" value="<?php echo e($post->id); ?>">
							<button class="btn btn-danger" type="submit" onclick="return confirm_delete('are you sure delete')">Xóa</button>
							<?php echo e(csrf_field()); ?>

						</form>
					</td>


				</tr>
				
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
		<div style="text-align: center;">
    	<?php echo $posts->render(); ?>
    	</div>
		
	
		 
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
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




<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>