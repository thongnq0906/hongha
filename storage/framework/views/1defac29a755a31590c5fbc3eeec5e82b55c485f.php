<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="">
    
		<table class="table">
			<thead>
				<tr>
					<th class="col-md-1">ID</th>
					<th class="col-md-7">Email</th>
					<th class="col-md-4">Role</th>
				</tr>
			</thead>
			<tbody>
			<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>			
				<tr>
					<td><?php echo e($user->id); ?></td>
					<td><?php echo e($user->email); ?></td>
					<td>
					<form action="<?php echo e(route('admin.assign')); ?>" method="post">
					<input type="hidden" name="id" value="<?php echo e($user->id); ?>" />
					<div class="checkbox-inline">
  						<label><input 
						type="checkbox" 
						name="role_user"
						<?php echo e($user->hasRole('user')?'checked':''); ?> 
						/>User</label>
					</div>

					<div class="checkbox-inline">
  						<label><input 
						type="checkbox" 
						name="role_author"
						<?php echo e($user->hasRole('author')?'checked':''); ?> 
						/>Author</label>
					</div>

					<div class="checkbox-inline">
  						<label><input 
						type="checkbox" 
						name="role_admin"
						<?php echo e($user->hasRole('admin')?'checked':''); ?> 
						/>Admin</label>
					</div>

					<div class="checkbox-inline">
					<input type="submit" value="Submit">
					</div>
					<?php echo e(csrf_field()); ?>

					</form></td>
					
				
				</tr>
				
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
		
		
		 
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>