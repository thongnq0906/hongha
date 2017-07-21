<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="">
    	<form action="<?php echo e(route('add-category')); ?>" method="post">
			<div class="form-group">
				<label for="category">Tên danh mục:</label>
				<input type="text" class="form-control" name="category" required="">
			</div>
			<div class="form-group">
				<label for="description">Miêu tả chi tiết:</label>
				<input type="text-area" class="form-control" name="description" required="">
			</div>
			<?php echo e(csrf_field()); ?>

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
			<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			
				<tr>
				
					
					<td><?php echo e($category->id); ?></td>
					<td><?php echo e($category->category); ?></td>
					<td><?php echo e($category->description); ?></td>	
					<td>
						<a href="<?php echo e(route('edit-category',['id'=>$category->id])); ?>">
						<button class="btn btn-default	">Sửa</button>
						</a>
						<form action="<?php echo e(route('remove-category')); ?>" method="post" style="display:inline;">
						<input type="hidden" name="id" value="<?php echo e($category->id); ?>">
						<button class="btn btn-danger" type="submit">Xóa</button>
						<?php echo e(csrf_field()); ?>

						</form>
					</td>							
					
				
				</tr>
				
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
		
		
		 
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>