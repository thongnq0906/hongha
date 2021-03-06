<footer>
	<div class="footer ">
		<div class=" uk-container uk-container-center">
			<ul class= " menu-bottom uk-nav">
			    <?php $menu_lv1 = DB::table('categories')->where('parent_id',0)->get(); ?>
	            <?php $__currentLoopData = $menu_lv1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	            <li class="" data-uk-dropdown>
	                <?php if($item1->parent_id ==0): ?>
	                    <a href="<?php echo e(route('page', $item1->slug)); ?>"><?php echo $item1->category; ?></a>
	                <?php else: ?>
	                <?php echo $item1->category; ?>

	                <?php endif; ?>
	                <div class="menu-childen uk-dropdown uk-dropdown-navbar">
	                    <ul class="uk-nav uk-nav-navbar">
	                        <?php $menu_lv2 = DB::table('categories')->where('parent_id',$item1->id)->get(); ?>
	                        <?php $__currentLoopData = $menu_lv2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                            <li><a href="<?php echo e(route('category', ['slug' => $item2->slug])); ?>"><?php echo $item2->category; ?></a></li>
	                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                    </ul>
	                </div>
	            </li>
	            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	            <!-- <li class="<?php echo e(((Route::currentRouteName()=='quy-can-hot')?'uk-active':'')); ?>"><a href="<?php echo e(Route('quy-can-hot-frontend')); ?>">Quỹ căn hot</a></li> -->

	            <li class="<?php echo e(((Route::currentRouteName()=='lien-he2')?'uk-active':'')); ?>"><a href="<?php echo e(Route('lien-he2')); ?>">liên hệ</a></li>
			</ul>
			<div class=" info uk-grid">
				
				<div class=" item uk-width-large-1-3 uk-width-medium-1-3 uk-width-small-1-1">
					<div class="title">CAM KẾT CỦA CHÚNG TÔI</div>
					<ul class="">
						<li>Có quỹ căn đẹp đem tới cho quý khách hàng lựa chọn đa dạng phù hợp với nhu cầu và tài chính</li>
						<li>Cung cấp thông tin chính xác và nhanh chóng nhất</li>
						<li>Hỗ trợ tư vấn pháp lý và thủ tục nhanh chóng</li>
						<li>Cam kết trở thành cầu nối vững chắc, chuyên nghiệp giữa khách hàng và chủ đầu tư</li>
					</ul>
				</div>
				<div class="item uk-width-large-1-3 uk-width-medium-1-3 uk-width-small-1-1">
					<div class="title">LIÊN HỆ VỚI CHÚNG TÔI</div>
					<ul class="hotline">
						<li><i class="uk-icon-map-marker"></i> Trụ sở chính: Tầng 1&2, Tòa Vimeco, Lô E9 đường Phạm Hùng, P. Trung Hòa, Q. Cầu Giấy, HN</li>
						<li><a href="tel:0916086688" title="0967 87 6969"><i class="uk-icon-phone-square"></i>Hotline: 0916.08.66.88</a></li>
						<li><a href="tel:0473057666" title="04.7305.7666"><i class="uk-icon-phone"></i> Tel: 04.7305.7666</a></li>
					</ul>
				</div>
				<div class="item uk-width-large-1-3 uk-width-medium-1-3 uk-width-small-1-1">
					<div class="maps uk-text-center">
					<a href="https://www.facebook.com/H%E1%BB%93ng-H%C3%A0-Eco-City-1955250248055690/" title=""><img src="<?php echo e(asset('/samples/logo.png')); ?>"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="mobile-bottom">
			<ul class="uk-nav">
				<li><a href="tel:0916086688"><i class="uk-icon-phone"></i>0916.08.66.88</a></li>
				<li><a href="#my-id-form" data-uk-modal> Nhận thông tin</a></li>
			</ul>
		</div>
	</div>
</footer>
<div class="livechat">
	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/5979b9825dfc8255d623f341/default';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
	</script>
	<!--End of Tawk.to Script-->
</div>